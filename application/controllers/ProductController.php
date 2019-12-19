<?php

    Class ProductController extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('AdminModel');
            $this->load->model('ProductModel');
            $this->load->model('CategoryModel');
            $this->load->library('Session');
        }

        public function product()
        {
            $data['users'] = $this->AdminModel->get_users();
            $data['categories'] = $this->CategoryModel->get_category();
            $data['products'] = $this->ProductModel->get_products();
            $this->load->view('product_view', $data);
        }

        public function list_of_products()
        {
            $data['users'] = $this->AdminModel->get_users();
            $data['categories'] = $this->CategoryModel->get_category();
            $data['products'] = $this->ProductModel->get_products();
            $this->load->view('list_product_view', $data);
        }

        public function edit($p_id)
        {
            
            $data['edit_products'] = $this->ProductModel->get_product_id($p_id);
            $data['users'] = $this->AdminModel->get_users();
            $data['categories'] = $this->CategoryModel->get_category();
            $data['products'] = $this->ProductModel->get_products();
            $this->load->view('update_product_view', $data);
        }

        public function add_product()
        {
            $product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
            $product_quantity = $this->input->post('product_quantity');
            $product_category = $this->input->post('product_category');
            $product_price = $this->input->post('product_price');
            
            $image = $this->input->post('logo');
            $path = "http://localhost/ecommercesite/uploads/". $image;
            
            if(empty($product_name) || empty($product_description) || empty($product_quantity) || empty($product_category))
            {
                $this->session->set_flashdata('error', 'All fields are required');
                redirect(base_url('ProductController/product'));
            }

            else
            {
                $add = array(
                
                    'product_name' => $product_name,
                    'product_description' => $product_description,
                    'product_quantity' => $product_quantity,
                    'category_id' => $product_category,
                    'product_price' => $product_price,
                    'image' => $image,
                    'path_image' => $path
                );
    
                $this->ProductModel->insert($add);
                $this->session->set_flashdata('message', 'Added Successfully');
                redirect(base_url('ProductController/product'));
            }
        }

        public function update()
        {
            $product_name = $this->input->post('product_name');
            $product_description = $this->input->post('product_description');
            $product_quantity = $this->input->post('product_quantity');
            $product_category = $this->input->post('product_category');
            $product_price = $this->input->post('product_price');

            if(empty($product_name) || empty($product_description) || empty($product_quantity) || empty($product_category))
            {
                $this->session->set_flashdata('error', 'All fields are required');
                redirect(base_url('ProductController/update'));
            }
            
            else
            {
                $add = array(
                
                    'product_name' => $product_name,
                    'product_description' => $product_description,
                    'product_quantity' => $product_quantity,
                    'category_id' => $product_category,
                    'product_price' => $product_price

                );

                $this->ProductModel->update($add);
                $this->session->set_flashdata('message', 'Updated Successfully');
                redirect(base_url('ProductController/list_of_products'));
            }

            

        }


        public function delete()
        {
            $id = $this->uri->segment(3);
            $this->ProductModel->delete($id);
            $this->session->set_flashdata('message', 'Deleted');
            redirect(base_url('ProductController/list_of_products'));
        }
    }























?>