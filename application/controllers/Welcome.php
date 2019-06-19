<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->model('customers_model');

		$data['customer'] = $this->customers_model->get_customer(3);

		$this->load->view('welcome_message', $data);
	}
}
