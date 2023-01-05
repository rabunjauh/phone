<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Csetting extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('msetting');
		$this->load->model('memployee');
	}

	public function index()
	{
		$data = [];
		$data['menu'] = '';
		$data['navigation'] = $this->memployee->getOfficeLocations();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
    $data['address'] = $this->msetting->getAddress();
		$data['cover'] = $this->load->view('headers/cover', $data, TRUE);
		$data['content'] = $this->load->view('contents/vSetting', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
    $this->load->view('main', $data);
	}

	public function addAddress() {
		if($this->input->post()) {
			$this->form_validation->set_rules('company', 'Company Name', 'required|max_length[100]');
			$this->form_validation->set_rules('road', 'Address', 'required|max_length[255]');
			$this->form_validation->set_rules('phone', 'Phone No', 'required|max_length[20]');
			$this->form_validation->set_rules('fax', 'Fax No', 'max_length[20]');

			if($this->form_validation->run() == false) {
				redirect(base_url('csetting/addAddress'));
			} else {
				$post['company'] = $this->input->post('company', TRUE);
				$post['road'] = $this->input->post('road', TRUE);
				$post['phone'] = $this->input->post('phone', TRUE);
				$post['fax'] = $this->input->post('fax', TRUE);

				if($this->msetting->saveAddress($post) !== 0) {
					$message = '<div class="alert alert-success">Address added successfully</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('csetting'));
				} else {
					$message = '<div class="alert alert-danger">Add address failed</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('csetting/addAddress'));
				}
			}
		} 
		$data = [];
		$data['menu'] = '';
		$data['navigation'] = $this->memployee->getOfficeLocations();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
    $data['address'] = $this->msetting->getAddress();
		$data['cover'] = $this->load->view('headers/cover', $data, TRUE);
		$data['content'] = $this->load->view('forms/formAddAddress', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
    $this->load->view('main', $data);
	}

	public function editAddress() {
		if($this->input->post()) {
			$this->form_validation->set_rules('company', 'Company Name', 'required|max_length[100]');
			$this->form_validation->set_rules('road', 'Address', 'required|max_length[255]');
			$this->form_validation->set_rules('phone', 'Phone No', 'required|max_length[20]');
			$this->form_validation->set_rules('fax', 'Fax No', 'max_length[20]');

			if($this->form_validation->run() == false) {
				redirect(base_url('csetting/editAddress'));
			} else {
				$id = $this->input->post('id', TRUE);
				$post['company'] = $this->input->post('company', TRUE);
				$post['road'] = $this->input->post('road', TRUE);
				$post['phone'] = $this->input->post('phone', TRUE);
				$post['fax'] = $this->input->post('fax', TRUE);

				if($this->msetting->updateAddress($post, $id) !== 0) {
					$message = '<div class="alert alert-success">Address updated successfully</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('csetting'));
				} else {
					$message = '<div class="alert alert-danger">Update address failed</div>';
					$this->session->set_flashdata('message', $message);
					redirect(base_url('csetting/editAddress'));
				}
			}
		}
		$data = [];
		$data['menu'] = '';
		$data['navigation'] = $this->memployee->getOfficeLocations();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
    $data['address'] = $this->msetting->getAddress();
		$data['cover'] = $this->load->view('headers/cover', $data, TRUE);
		$data['content'] = $this->load->view('forms/formEditAddress', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
    $this->load->view('main', $data);
	}
}
