<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/nav');
        $this->load->view('main/index');
        $this->load->view('include_bs/bottom_two');
    }
    public function login()
    {
        //$this->dd($this->input->post());

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {

            $this->index();
        } else {
            $data = array(
                'email' => $this->input->post('email'), //$_POST['username]
                //'password' => ($this->input->post('password'))
                'password' => sha1($this->input->post('password')),

            );

            // $this->dd($data);
            $this->load->model('User_model');
            $this->User_model->login($data);
            if ($this->session->login) {
                if ($this->session->usr_type == 'user') {
                    redirect('item/index');
                } else {
                    redirect('home/dashboard
                    ');
                }
            } else {
                $this->index();
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->index();
    }

    public function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    public function register()
    {
        $this->load->library('form_validation');
        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/nav');
        $this->load->view('main/registration');
        $this->load->view('include_bs/bottom_two');
    }

    public function insert()
    {


        $this->load->library('form_validation');
        // here are the validation entry
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        //$this->form_validation->set_rules('AcnRePass', 'confirm_password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->register();
        } else {
            // if(AcnPass == AcnRePass){
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'password' => sha1($this->input->post('password')),
                'verification_code_sha1' => sha1($this->input->post('email_verification_code_sha1'))

            );
            $this->load->model('User_model');
            // $this->User_model->insert($full_name, $username, $password);
            $this->User_model->insert($data);

            //email ver
            $this->load->library('email');
            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'Sample.01123@gmail.com';
            $config['smtp_pass']    = 'Gmail.01';

            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not      

            $this->email->initialize($config);

            $this->email->from('BRentals@gmail.com', 'myname');
            $this->email->to('Sample.01123@gmail.com');
            $this->email->subject('"Account Verification"');

            $user_mail = $this->input->post('email');
            $ver_code = sha1($this->input->post('email_verification_code_sha1'));
            $base = base_url();
            $a = "<a href='$base.home/verify_mail/$ver_code'><h2>CLICK HERE TO VERIFY</h2></a>";
            $this->email->message($a);
            $this->email->send();

            echo $this->email->print_debugger();
            //email ver
            redirect('home/login');
            //}
        }
    }

    public function users()
    {
        $data2['header'] = "USER LIST";
        $this->load->model('User_model');
        $accounts = $this->User_model->getAllItems();
        $data2['accounts'] = $accounts;


        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/admin_nav');
        $this->load->view('main/users', $data2);
        $this->load->view('include_bs/bottom_two');
    }

    public function dashboard()
    {
        $data2['header'] = "USER LIST";
        $this->load->model('User_model');
        $accounts = $this->User_model->getAllItems();
        $data2['accounts'] = $accounts;


        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/admin_nav');
        $this->load->view('main/dashboard', $data2);
        $this->load->view('include_bs/bottom_two');
    }

    public function verify_mail($data)
    { 
        $this->load->model('User_model');
        $user = $this->User_model->getUser($data);
        // echo '<pre>';
        // print_r($user);
        // echo '</pre>';
        // echo $user->id.'<br/>'; 
        if($data == $user->verification_code_sha1)
        {
            $this->load->model('User_model');
            $this->User_model->verifyUser($user->id);
           $this->verify();
        }

    }

    public function showCalendar()
    {

        $data2['header'] = "USER LIST";
        $this->load->model('User_model');
        $accounts = $this->User_model->getAllItems();
        $data2['accounts'] = $accounts;

        $this->load->view('include_bs/top_two');
        $this->load->view('include_bs/admin_nav');
        $this->load->view('main/calendar', $data2);
        $this->load->view('include_bs/bottom_two');
    }

    public function verify(){
       
        $this->load->model('Item_model');
        $items = $this->Item_model->getAllItems();
            $data['items'] = $items;
        // $this->load->view('include_bs/top_two');
        // $this->load->view('include_bs/admin_nav');
        $this->load->view('main/verify', $data);
        // $this->load->view('include_bs/bottom_two');

    }

}
