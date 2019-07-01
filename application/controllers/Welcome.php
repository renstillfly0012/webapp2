<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			//$this->load->config('my_config');
	}

	public function index()
	{
		$this->load->view('includes/links');
		$this->load->view('includes/header');
		$this->load->view('includes/sidebar');
		$this->load->view('welcome_message');
		$this->load->view('includes/footer');
	}



}
