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
            $ca = $this->CartModel->get_carts();

            foreach($data as $p):
                $product_id = $p['product_id'];
                $product_price = $p['product_price'];
                $product_quantity = $p['product_quantity'];
            endforeach;
            
            foreach($user as $u):
                if($u['username'] == $this->session->userdata('username'))
                {
                    
                        $user_id = $u['user_id'];
                }
            endforeach;

            foreach($ca as $car):
                $cart_quantity = $car['quantity'];
                //$category_quantity = $c['category_id'];
            endforeach;

            foreach($category as $c):
                $category_id = $c['category_id'];
                //$category_quantity = $c['category_id'];
            endforeach;

            if($total = $product_quantity - $cart_quantity){
                $quantity = $total;
                echo $quantity;

                $id = $this->uri->segment(3);
                $update = array(
                
                    
                'product_quantity' => $quantity
                );

                $this->ProductModel->updatequantity($update, $id);

                $add = array(
                
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'status' => "To be Paid",
                    'product_price' => $product_price
                    
                    );
                    
                    $this->CartModel->insert($add);
                    redirect(base_url('UserController/home'));
            }else{
                echo "No enough quantity";
            }       
        }

         
    }
























?>