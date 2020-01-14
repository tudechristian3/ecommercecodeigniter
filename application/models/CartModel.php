<?php

    Class CartModel extends CI_Model
    {


        public function __construct()
        {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('ProductModel');
            $this->load->model('CategoryModel');
            $this->load->model('CartModel');
        }

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
            $users = $this->UserModel->get_users();
            foreach($users as $u):
            if($this->session->userdata('username') == $u['username']):
               $user = $u['user_id'];
            // $query = $this->db->query('SELECT COUNT(user_id) as carts FROM add_cart WHERE user_id = $this->session->userdata(username)');
            // return $query->row()->carts;
            //$this->db->query('SELECT COUNT(user_id)');
            $query = $this->db->where('user_id', $user);
            $query = $this->db->from('add_cart');
            return $this->db->count_all_results();
            endif; 
            endforeach; 
	    }	
        





    }























?>