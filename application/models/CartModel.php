<?php

    Class CartModel extends CI_Model
    {
        private $table = "add_cart";

        public function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        public function count_cart()
	    {
            $query = $this->db->query('SELECT COUNT(user_id) as carts FROM add_cart WHERE notification = 1');
            return $query->row()->carts;
	    }	
        





    }























?>