<?php

    Class UserModel extends CI_Model
    {
        private $table = "users";

        public function auth($username, $password)
        {
            $this->db->where('username', $username);
            $this->db->where('password', $password);
            $query = $this->db->get($this->table);
            return $query->result_array();
        }

        public function get_users()
        {
            $query = $this->db->get($this->table);
            return $query->result_array();
        }
    }


















?>