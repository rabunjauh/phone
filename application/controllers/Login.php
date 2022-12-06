<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		if ( $this->session->userdata('username') ){
			$this->session->sess_destroy();
		}
	}
	public function index()
	{
		if ( isset($_POST['btn_login']) ){
			$form_info['username'] = $this->input->post('txt_username', TRUE);
			$form_info['password'] = $this->input->post('txt_password', TRUE);
			
			if ( $this->m_login->login($form_info) ){
				redirect(base_url().'cemployee');
			}else{
				$message = '<div class="alert alert-danger">Username/Password is not correct!</div>';
				$this->session->set_flashdata('message', $message);
				redirect(base_url().'login');
			}

		}
		$data = [];
		$data['menu'] = "login";
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['content'] = $this->load->view('forms/formLogin', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url(). 'login');
    }

}

