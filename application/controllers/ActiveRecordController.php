<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ActiveRecordController extends CI_Controller
{
    public function index() {
        $query = $this->db->get('orders');

        echo "<h3>Orders Listing</h3>";
        echo "<ul>";

        foreach ($query->result() as $row) {
            echo "<li>$row->customer_name - $row->customer_address</li>";
        }

        echo "</ul>";
    }

    public function store_order() {
        $data = [
            'date' => '2004-07-11',
            'customer_name' => 'Bill the Killer',
            'customer_address' => 'US'
        ];

        $this->db->insert('orders', $data);

        echo 'order has succesfully been created';
    }

    public function update_order() {
        $data = [
            'customer_name' => 'Phill'
        ];

        $this->db->where('id', 1);
        $this->db->update('orders', $data);
        echo 'order has successfully been updated';
    }

    public function delete_order() {
        $this->db->where('id', 3);
        $this->db->delete('orders');

        echo 'order has successfully been deleted';
    }
}