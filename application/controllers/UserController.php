<?php

    Class UserController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('ProductModel');
            $this->load->model('CartModel');
            $this->load->model('CategoryModel');
            $this->load->model('UserModel');
        }

        public function login_view()
        {
            $this->load->view('user_login_view');
        }

        public function home()
        {
            $data['users'] = $this->UserModel->get_users();
            $data['carts'] = $this->CartModel->count_cart();
            $data['categories'] = $this->CategoryModel->get_category();
            $data['products'] = $this->ProductModel->get_products();
            $this->load->view('user_home_view', $data);
        }

        public function mycart()
        {
            $data['users'] = $this->UserModel->get_users();
            $data['carts'] = $this->CartModel->count_cart();
            $data['cart'] = $this->CartModel->get_carts();
            $data['categories'] = $this->CategoryModel->get_category();
            $data['products'] = $this->ProductModel->get_products();
            $this->load->view('user_mycart_view', $data);
        }

        public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->UserModel->auth($username,$password);

            if($result){
                $validate = array(
                        'username' =>$username,
                        'password' =>$password
                    );
                $this->session->set_userdata($validate);    
                    if($result[0]['status']=='User'){
                        redirect(base_url('UserController/home'));
                    }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Credentials');
                redirect(base_url('UserController/login_view'));
            }
        }

        public function logout()
		{
			$this->session->unset_userdata('username');
			redirect(base_url('UserController/login_view'));
        }
    }






















?>