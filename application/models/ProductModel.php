<?php

    Class ProductModel extends CI_Model
    {
        private $table = "products";

        public function insert($data)
        {
            $this->db->insert($this->table, $data);
        }

        public function get_products()
        {
            $query = $this->db->get($this->table);
            return $query->result_array();
        }

        public function get_product_id($p_id){
            $query = $this->db->get_where('products', array('product_id' => $p_id));
            return $query->result_array();
        }

        public function update($data){
            $this->db->where('product_id', $this->input->post('product_id'));
            return $this->db->update($this->table, $data);
        }



        public function updatequantity($data, $id)
        {
            $this->db->where('product_id', $id);
            return $this->db->update($this->table, $data);
        }

        public function delete($id)
        {
            $this->db->where('product_id', $id);
            $this->db->delete('products');
        }


    }























?>