<?php

    Class AdminController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('AdminModel');
            $this->load->library('Session');
        }


        public function index()
        {
            $this->load->view('admin_login_view');
        }

        public function home()
        {
            $data['users'] = $this->AdminModel->get_users();
            $this->load->view('admin_home_view', $data);
        }

        public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->AdminModel->auth($username,$password);

            if($result){
                $validate = array(
                        'username' =>$username,
                        'password' =>$password
                    );
                $this->session->set_userdata($validate);    
                    if($result[0]['status']=='Admin'){
                        redirect(base_url('AdminController/home'));
                    }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Credentials');
                redirect(base_url('AdminController/index'));
            }
        }



        public function logout()
		{
			$this->session->unset_userdata('username');
			redirect(base_url('AdminController/index'));
        }
        
        public function _displayAlert($message,$cont){
       	 echo "<script>alert('$message');window.location='".base_url()."$cont';</script>";
    }		
    }













?>