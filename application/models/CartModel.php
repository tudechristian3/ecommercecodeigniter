<?php

    Class CartModel extends CI_Model
    {
        private $table = "add_cart";

        public function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        public function get_carts()
        {
            $query = $this->db->get($this->table);
            return $query->result_array();
        }

        
        public function get_cart_id($c_id){
            $query = $this->db->get_where('add_cart', array('cart_id' => $c_id));
            return $query->result_array();
        }

        public function count_cart()
	    {
            $query = $this->db->query('SELECT COUNT(user_id) as carts FROM add_cart WHERE notification = 1');
            return $query->row()->carts;
	    }	
        





    }























?>