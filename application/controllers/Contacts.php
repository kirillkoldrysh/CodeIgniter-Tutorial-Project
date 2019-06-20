<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contacts extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('contacts/index');
        $this->load->view('footer');
    }

    public function create()
    {
        $this->load->view('header');
        $this->load->view('contacts/create');
        $this->load->view('footer');
    }

    public function edit($id)
    {
        $this->load->view('header');
        $this->load->view('contacts/edit');
        $this->load->view('footer');
    }

    public function update($id)
    {
        $this->load->view('header');
        $this->load->view('contacts/update');
        $this->load->view('footer');
    }

    public function delete($id)
    {
        $this->load('header');
        $this->load('contacts/delete');
        $this->load('footer');
    }
}