<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ActiveRecordController extends CI_Controller
{
    public function store_order() {
        $data = [
            'date' => '2018-12-19',
            'customer_name' => 'Arthur the King',
            'customer_address' => 'CZ'
        ];

        $this->db->insert('orders', $data);

        echo 'order has succesfully been created';
    }
}