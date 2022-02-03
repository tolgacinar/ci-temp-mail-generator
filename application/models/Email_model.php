<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Email_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setUser($address)
    {
        $query = $this->db->get_where("addresses", ['address' => $address]);
        if ($query->num_rows() > 0) {
            $user = $query->row();
            $this->setSession([
                "address" => $user->address,
                "code"  =>  $user->code,
                "lifetime"  =>  strtotime(date("Y-m-d H:i:s")),
            ]);
        } else {
            $this->db->trans_begin();
            $this->db->insert("addresses", ['address' => $address]);
            $id = $this->db->insert_id();
            $code = $this->user->generateRandomString(6) . $id;
            $this->db->update("addresses", ['code' => $code], ['id' => $id]);
            if ($this->db->trans_complete()) {
                $this->db->trans_commit();
                $this->setSession([
                    "address" => $address,
                    "code"  =>  $code,
                    "lifetime" => strtotime(date("Y-m-d H:i:s"))
                ]);
                return TRUE;
            } else {
                $this->db->trans_rollback();
                return FALSE;
            }
        }
    }

    public function setSession($session_data = [])
    {
        $this->session->set_userdata($session_data);
    }

    public function checkSession()
    {
        if (!$this->session->userdata("lifetime") || !$this->session->userdata("address") || !$this->session->userdata("code")) {
            return FALSE;
        } else {
            if (round(abs(time() - $this->session->userdata("lifetime")) / 60) > 10) {
                $this->email_model->setUser($this->user->get_random_address($this->config->item("domains")));
            }
        }

        return TRUE;
    }

    public function displayEmailsMatches()
    {
        return !isset($_GET['action']) && !empty($_SERVER['QUERY_STRING'] ?? '');
    }

    public function displayEmailsInvoke()
    {
        $address = $_SERVER['QUERY_STRING'] ?? '';
        $user = $this->user->parseDomain($address, $this->config->item('blocked_usernames'));
        if ($user->isInvalid($this->config->item("domains"))) {
            $this->RedirectToRandomAddressInvoke($this->imapclient, $this->config);
            return;
        }
        echo "<pre>";
        $emails = $this->imapclient->get_emails($user);
        $this->displayEmailsRender($emails, $this->config, $user);
    }

    public function displayEmailsRender($emails, $config, $user)
    {
        // variables that have to be defined here for frontend template: $emails, $config
        // $this->load->view("main");
    }

    public function redirectToAddressMatches()
    {
        return ($_GET['action'] ?? null) === "redirect"
            && isset($_POST['username'])
            && isset($_POST['domain']);
    }

    public function redirectToAddressInvoke(ImapClient $imapClient, array $config)
    {
        $user = $this->user->parseUsernameAndDomain($_POST['username'], $_POST['domain'], $config['blocked_usernames']);
        $this->redirectToAddressRender($user->username . "@" . $user->domain);
    }

    public function redirectToAddressRender($address)
    {
        header("location: ?$address");
    }

    public function RedirectToRandomAddressMatches()
    {
        return ($_GET['action'] ?? null) === 'random';
    }

    public function RedirectToRandomAddressInvoke()
    {
        $address = [];
        $this->redirectToAddressRender($address);
    }
}

/* End of file Email_model.php */
/* Location: ./application/models/Email_model.php */