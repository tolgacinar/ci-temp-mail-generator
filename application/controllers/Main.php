<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
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

	public function index()
	{
		if ($this->email_model->checkSession()) {
		} else {
			if ($this->email_model->setUser($this->user->get_random_address($this->config->item("domains")))) {
				redirect("/", "refresh");
			} else {
				die("Lütfen sayfayı yenileyin.");
			}
		}

		$data = [
			"user_data" => $this->session->userdata()
		];

		$this->load->view("main", $data);
	}
}
