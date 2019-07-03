<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{

    public function test()
    {
        //echo 'test message';
        phpinfo();
        $this->load->view('item/test');
    }

    public function index_two()
    {
       
        $data['header'] = "ITEM LIST";
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllItems();

        $data['items'] = $items;
        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/nav');

        $this->load->view('item/index_two', $data);
        $this->load->view('include_bs/bottom_two_two');
    }

    public function index()
    {
        $this->load->library('session');
        if ($this->session->has_userdata('login', true) ) {
           
            $this->load->library('cart');
            $per_page = 5;
            $end_page = $this->uri->segment(3);
            $this->load->model('Item_model');
            $this->load->library('pagination');
            $config = [
                'base_url' => base_url('item/index'),
                'per_page' => $per_page,
                'total_rows' => $this->Item_model->num_rows(),
            ];

            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['num_tag_open'] = '<li class="page-item">';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
            $config['cur_tag_close'] = '</a></li>';
            $config['next_tag_open'] = '<li class="page-item">';
            $config['next_tagl_close'] = '</a></li>';
            $config['prev_tag_open'] = '<li class="page-item">';
            $config['prev_tagl_close'] = '</li>';
            $config['first_tag_open'] = '<li class="page-item disabled">';
            $config['first_tagl_close'] = '</li>';
            $config['last_tag_open'] = '<li class="page-item">';
            $config['last_tagl_close'] = '</a></li>';
            $config['attributes'] = array('class' => 'page-link');
            $this->pagination->initialize($config); // model function



            $data['header'] = "ITEM LIST";
            $this->load->model('Item_model');
            $items = $this->Item_model->getItems($per_page, $end_page);

            $data['items'] = $items;


            $this->load->view('include_bs/top_two');
            $this->load->view('include_bs/admin_nav');
            $this->load->view('item/index', $data);
            $this->load->view('include_bs/bottom_two');
        } else {

            redirect('home/index');
        }
    }

    public function delete($id)
    {
        $this->load->model('Item_model');
        $items = $this->Item_model->deleteItem($id);
        redirect('item/index');
    }

    public function add()
    {
        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/admin_nav');
        $this->load->view('item/add');
        $this->load->view('include_bs/bottom_two');
    }

    public function insert()
    {
        $this->load->library('form_validation');

        //here are the validation entry
        $this->form_validation->set_rules('name', 'Item Name', 'required');
        $this->form_validation->set_rules('description', 'Item Description', 'required');
        $this->form_validation->set_rules('price', 'Item Price', 'required|numeric|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $this->load->model('Item_model');
            $this->Item_model->insert($_POST);
            redirect('item/index');
        }
    }

    public function view($id)
    {
        $this->load->library('session');
        if ($this->session->has_userdata('login', true)) {
            $this->load->model('Item_model');
            $data['item'] = $this->Item_model->get_item($id);
            $this->load->view('include_bs/top_two');
            $this->load->view('include_bs/admin_nav');
            $this->load->view('item/view', $data);
            $this->load->view('include_bs/bottom_two');
        } else {
            redirect('home/index');
        }
    }

    public function viewedit($id)
    {
        $this->load->library('session');
        if ($this->session->has_userdata('login', true)) {
            $this->load->model('Item_model');
            $data['item'] = $this->Item_model->get_item($id);
            $this->load->view('include_bs/top_two');
            $this->load->view('include_bs/admin_nav');
            $this->load->view('item/edit', $data);
            $this->load->view('include_bs/bottom_two');
        } else {
            redirect('home/index');
        }
    }

    public function edit($id)
    {
        $this->load->model('Item_model');
        $data['item'] = $this->Item_model->get_item($id);

        $name = $this->input->post('name');
        $description = $this->input->post('description');
        $price = $this->input->post('price');

        // $this->load->model('Item_model');
        // $this->Item_model->update($id,$name,$description,$price);
        // redirect('item/index');

        $this->load->library('form_validation');

        //here are the validation entry
        $this->form_validation->set_rules('name', 'Item Name', 'required');
        $this->form_validation->set_rules('description', 'Item Description', 'required');
        $this->form_validation->set_rules('price', 'Item Price', 'required|numeric|greater_than[0]');

        if ($this->form_validation->run() == FALSE) {
            $this->viewedit($id);
        } else {
            $this->load->model('Item_model');
            $this->Item_model->update($id, $name, $description, $price);
            redirect('item/index');
        }
    }

    public function do_upload()
    {
        $this->load->model('Item_model');
        //die($_POST['id']);
        $config['upload_path'] = './assets/images/thumb_img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 512;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $data['msg'] = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());

            $data['msg'] = array('success' => 'Image successfully uploaded');
            $filename = $data['upload_data']['file_name'];
            $this->Item_model->updateImg($_POST['id'], $filename);
        }



        $data['error'] = array('error' => $this->upload->display_errors());

        $data['item'] = $this->Item_model->get_item($_POST['id']);
        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/nav');
        $this->load->view('item/edit', $data);
        $this->load->view('include_bs/bottom_two');
    }

    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }

    public function add_to_cart($id)
    {


        $this->load->model('Item_model');
        $item = $this->Item_model->get_item($id);


        $this->load->library('cart');
        $data = array(
            'id'      => $item->id,
            'qty'     => 1,
            'price'   => $item->price,
            'name'    => $item->name,
        );
        // $this->dd($data);

        $this->cart->insert($data);
        redirect('item/index');
    }

    public function clear_item()
    {
        $this->load->library('cart');
        $this->cart->update($_POST);
        redirect('item/index');
    }
}
