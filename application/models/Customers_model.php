<?php

class Customers_model extends CI_Model
{
    public function get_customer($id)
    {
        $data['id'] = 3;
        $data['first_name'] = 'James';
        $data['last_name'] = 'Adams';
        $data['address'] = 'Brighton Beach';

        return $data;
    }
}