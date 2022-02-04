<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->config("temp_email");
		$this->load->library("imapclient");
		$this->load->library("user");
		$this->load->model("email_model");
		$this->load->library("session");
		$this->load->database();
	}

	public function getStatus()
	{
		$return_array = [
			"address" => $this->session->userdata("address"),
			"lifetime" => $this->session->userdata("lifetime"),
			"changed"	=>	false,
		];
		if (!$this->email_model->checkSession()) {
			$return_array["changed"] = true;
		}
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($return_array));
	}

	public function getInbox()
	{
		$address = $this->input->get("address", TRUE);
		$user = $this->user->parseDomain($address, $this->config->item('blocked_usernames'));
		$emails = $this->imapclient->get_emails($user);


		\Moment\Moment::setLocale($this->config->item('locale'));
		$mailIds = array_map(function ($mail) {
			return $mail->id;
		}, $emails);

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($emails));
	}

	public function printMessageBody($email)
	{
		$this->load->helper("general");
		$purifier_config = HTMLPurifier_Config::createDefault();
		$purifier_config->set('HTML.Nofollow', true);
		$purifier_config->set('HTML.ForbiddenElements', array("img"));
		$purifier = new HTMLPurifier($purifier_config);

		// To avoid showing empty mails, first purify the html and plaintext
		// before checking if they are empty.
		$safeHtml = $purifier->purify($email->textHtml);

		$safeText = htmlspecialchars($email->textPlain);
		$safeText = nl2br($safeText);
		$safeText = auto_link_text($safeText);

		$hasHtml = strlen(trim($safeHtml)) > 0;
		$hasText = strlen(trim($safeText)) > 0;

		if ($this->config->item('prefer_plaintext')) {
			if ($hasText) {
				echo $safeText;
			} else {
				echo $safeHtml;
			}
		} else {
			if ($hasHtml) {
				echo $safeHtml;
			} else {
				echo $safeText;
			}
		}
	}

	public function change_email()
	{
		if ($this->email_model->checkSession()) {
		} else {
			if ($this->email_model->setUser($this->user->get_random_address($this->config->item("domains")))) {
				redirect("/", "refresh");
			} else {
				die("Lütfen sayfayı yenileyin.");
			}
		}
		if (!$this->input->post("is_random")) {
			$this->load->library("form_validation");
			$this->form_validation->set_rules("address", "E-posta Adresi", "required|valid_email");
			if ($this->form_validation->run() === TRUE) {
				if ($this->email_model->setUser($this->input->post("address"))) {
					$this->output
						->set_content_type('application/json')
						->set_output(json_encode([
							"status"	=>	true,
						]));
				} else {
					$this->output
						->set_content_type('application/json')
						->set_output(json_encode([
							"status"	=>	false,
							"message"	=>	"Tekrar deneyin"
						]));
				}
			} else {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode([
						"status"	=>	false,
						"message"	=>	validation_errors()
					]));
			}
		} else {
			if ($this->email_model->setUser($this->user->get_random_address($this->config->item("domains")))) {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode([
						"status"	=>	true,
					]));
			} else {
				$this->output
					->set_content_type('application/json')
					->set_output(json_encode([
						"status"	=>	false,
						"message"	=>	"Tekrar deneyin"
					]));
			}
		}
	}
}
