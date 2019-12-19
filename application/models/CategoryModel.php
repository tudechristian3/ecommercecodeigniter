<?php

    Class CategoryModel extends CI_Model
    {
        private $table = "category";

        public function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        public function get_category()
        {
            $query = $this->db->get($this->table);
            return $query->result_array();
        }
    }























?>