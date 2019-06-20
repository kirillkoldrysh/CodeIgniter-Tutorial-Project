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
        $this->load('header');
        $this->load('contacts/index');
        $this->load('footer');
    }

    public function create()
    {
        $this->load('header');
        $this->load('contacts/create');
        $this->load('footer');
    }

    public function edit($id)
    {
        $this->load('header');
        $this->load('contacts/edit');
        $this->load('footer');
    }

    public function update($id)
    {
        $this->load('header');
        $this->load('contacts/update');
        $this->load('footer');
    }

    public function delete($id)
    {
        $this->load('header');
        $this->load('contacts/delete');
        $this->load('footer');
    }
}