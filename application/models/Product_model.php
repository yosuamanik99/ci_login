<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function get_all()
    {
        return $this->db->order_by('created_at', 'DESC')->get('products')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('products', $data);
    }
}
