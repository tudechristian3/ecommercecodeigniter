<?php

    Class CartController extends CI_Controller
    {


        public function __construct()
        {
            parent::__construct();
            $this->load->model('UserModel');
            $this->load->model('ProductModel');
            $this->load->model('CategoryModel');
            $this->load->model('CartModel');
        }

        public function add_to_cart($p_id)
        {
            $product = $this->ProductModel->get_products();
            $data = $this->ProductModel->get_product_id($p_id);
            $user = $this->UserModel->get_users();
            $category = $this->CategoryModel->get_category();

            foreach($data as $p):
                $product_id = $p['product_id'];
            endforeach;
            
            foreach($user as $u):
                $user_id = $u['user_id'];
            endforeach;

            foreach($category as $c):
                $category_id = $c['category_id'];
            endforeach;

            $add = array(

                
                'user_id' => $user_id,
                'product_id' => $product_id,
                'status' => "To be Paid"
            );

            $this->CartModel->insert($add);
            redirect(base_url('UserController/home'));
        }
    }
























?>