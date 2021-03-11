
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cemployee extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('memployee');
		$this->load->model('mpabx11');	
		if ( !$this->session->userdata('username') ){
			redirect(base_url(). 'login');
		}	
	}

	public function index(){
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['totalEmployee'] =  $this->memployee->countEmployee();
	    $config["base_url"] = base_url() . "cemployee/index";
	    $config['total_rows'] = $data['totalEmployee'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['no'] = $this->uri->segment(3);
		$data['employees'] = $this->memployee->employeeList($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/vEmployee', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}
	
	public function addEmployee(){
		if ( $this->input->post() ){
			$formInfo = [];
			$formInfo['employee_status'] = $this->input->post('selectEmployeeStatus', TRUE);
			$formInfo['employeeno'] = $this->input->post('txtEmployeeNo', TRUE);
			$formInfo['employeename'] = strtoupper($this->input->post('txtEmployee', TRUE));
			$formInfo['iddept'] = $this->input->post('selDepartment', TRUE);
			$formInfo['idposition'] = $this->input->post('selPosition');
			$formInfo['code'] = $this->input->post('selCode');
			if ($this->input->post('selExtension', TRUE)){
				$formInfo['extId'] = $this->input->post('selExtension', TRUE);
			} else {
				$formInfo['ext'] = $this->input->post('textExtension', TRUE);
			}					
			if ( $this->memployee->saveEmployee($formInfo) !== 0){
				$this->mpabx11->updateExtensionStatusAdd($formInfo['extId']);
				$message = '<div class="alert alert-success">Success!</div>';
        		$this->session->set_flashdata('message', $message);
				redirect(base_url() . 'cemployee');				
			}else{
				$message = '<div class="alert alert-danger">Something wrong!</div>';
        		$this->session->set_flashdata('message', $message);
				redirect(base_url() . 'cemployee/addEmployee');
			}
		}

		$data = [];
		$data['extensions'] = $this->mpabx11->index();
		$data['departments'] = $this->memployee->department();
		$data['positions'] = $this->memployee->position();
		$data['listOfficeLocations'] = $this->memployee->getOfficeLocations();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);		
		$data['content'] = $this->load->view('forms/formAddEmployee', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function modifyEmployee($employeeId = NULL){
		if ( isset($_POST['btnUpdateEmployee']) ){
			$formInfo = [];
			$formInfo['employeeno'] = $this->input->post('txtEmployeeNo');
			$formInfo['employeename'] = strtoupper($this->input->post('txtEmployeeName'));
			$formInfo['iddept'] = $this->input->post('selDepartment');
			$formInfo['idposition'] = $this->input->post('selPosition');
			$formInfo['code'] = $this->input->post('selCode');
			$formInfo['extId'] = $this->input->post('selExtension');
			$formInfo['txtprevid'] = $this->input->post('txtprevid');
			if ( !$this->memployee->modifyEmployee($formInfo, $employeeId) ){				
				redirect(base_url() . 'cemployee/modifyEmployee/' . $employeeId);
			} else {
				if ( !$this->memployee->employee_ext_id($formInfo['txtprevid']) > 0){
					$this->mpabx11->updateExtensionStatus0($formInfo['extId'],$formInfo['txtprevid']);	
				}else{
					$this->mpabx11->updateExtensionStatus1($formInfo['extId'],$formInfo['txtprevid']);	
				}
				
				redirect(base_url() . 'cemployee');
			}
		}

		$data = [];
		$data['extensions'] = $this->mpabx11->index();
		$data['employees'] = $this->memployee->employeeIds($employeeId);
		$data['getEmployeeByIds'] = $this->memployee->getEmployeeByIds($employeeId);
		$data['departments'] = $this->memployee->department();
		$data['positions'] = $this->memployee->position();
		// $data['getEmpoyeeStatus'] = $this->memployee->getEmployeeStatus();
		$data['header'] = $this->load->view('headers/head', '', TRUE);		
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);					
		$data['content'] = $this->load->view('forms/formEditEmployee', $data, TRUE);		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$this->load->view('main', $data);	
	}

	public function search($searchCategory=false, $txtSearch=false){
		$data = [];
		if ( !$searchCategory AND !$txtSearch){
			$searchCategory = $this->input->post('selCategory');
			$txtSearch = htmlspecialchars($this->input->post('txtSearch'));	
		}
		
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['totalEmployee'] =  $this->memployee->countEmployeeSearch($searchCategory, urldecode($txtSearch));
	   	$config["base_url"] = base_url() . "cemployee/search/" . $searchCategory . "/" .  $txtSearch;
	    $config['total_rows'] = $data['totalEmployee'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '5';
	    $this->pagination->initialize($config);


		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['no'] = $this->uri->segment(5);
		$data['employees'] = $this->memployee->employeeListSearch($config['per_page'], $this->uri->segment(5),  $searchCategory, urldecode($txtSearch));
		$data['content'] = $this->load->view('contents/vEmployee', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);

		$this->load->view('main', $data);
	}


	// public function deleteEmployee($idEmployee = ''){
	// 	$this->memployee->deleteEmployee($idEmployee);
	// 	redirect(base_url() . 'cemployee');
	// }

	public function department(){		
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['totalDepartment'] =  $this->memployee->countDepartment();
	    $config["base_url"] = base_url() . "cemployee/department";
	    $config['total_rows'] = $data['totalDepartment'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['departments'] = $this->memployee->departmentList($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/vDepartment', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function addDepartment(){
		if ( $this->input->post() ){
			$formInfo = [];
			$formInfo['deptdesc'] = htmlspecialchars(strtoupper($this->input->post('txtDepartment')));
			$formInfo['group_id'] = htmlspecialchars(strtoupper($this->input->post('selectGroup')));
			$formInfo['stsactive'] = htmlspecialchars(strtoupper($this->input->post('selectStatus')));
			if ( $this->memployee->saveDepartment($formInfo) ){
				redirect(base_url() . 'cemployee/addDepartment');
			} else {
				redirect(base_url() . 'cemployee/department');
			}
		}
		$data = [];
		$data['departments'] = $this->memployee->department();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['groups'] = $this->memployee->groupList();
		$data['content'] = $this->load->view('forms/formAddDepartment', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function modifyDepartment($iddept = NULL){
		if ( isset($_POST['btnModifyDepartment']) ){
			$formInfo = [];
			$formInfo['deptdesc'] = htmlspecialchars(strtoupper($this->input->post('txtDepartmentName')));
			$formInfo['group_id'] = htmlspecialchars(strtoupper($this->input->post('selectGroup')));
			$formInfo['stsactive'] = htmlspecialchars(strtoupper($this->input->post('selectStatus')));
			if ( !$this->memployee->modifyDepartment($formInfo, $iddept) ){
				redirect(base_url() . 'cemployee/modifyDepartment/' . $iddept);
			} else {
				redirect(base_url() . 'cemployee/department');
			}
		}

		$data = [];
		$data['getDepartmentByIds'] = $this->memployee->getDepartmentByIds($iddept);
		$data['departmentIds'] = $this->memployee->departmentIds($iddept);
		$data['header'] = $this->load->view('headers/head', '', TRUE);		
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['groups'] = $this->memployee->groupList();					
		$data['content'] = $this->load->view('forms/formEditDepartment', $data, TRUE);		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$this->load->view('main', $data);	
	}

	public function deleteDepartment($iddept = ''){
		$this->memployee->deleteDepartment($iddept);
		redirect(base_url() . 'cemployee/department');
	}	

	public function position(){		
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['totalPosition'] =  $this->memployee->countPosition();
	    $config["base_url"] = base_url() . "cemployee/position";
	    $config['total_rows'] = $data['totalPosition'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['no'] = $this->uri->segment(3);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['departments'] = $this->memployee->department();
		$data['get_positions'] = $this->memployee->position();
		$data['positions'] = $this->memployee->positionList($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/vPosition', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function addPosition(){
		if ( $this->input->post() ){
			$formInfo = [];
			$formInfo['txtPosition'] = strtoupper($this->input->post('txtPosition'));
			$formInfo['selDepartment'] = $this->input->post('selDepartment');
			$formInfo['selLevel'] = $this->input->post('selLevel');
			if ( $this->memployee->savePosition($formInfo) ){
				redirect(base_url() . 'cemployee/addPosition');
			} else {
				redirect(base_url() . 'cemployee/position');
			}
		}
		$data = [];
		$data['positions'] = $this->memployee->position();
		$data['departments'] = $this->memployee->department();		
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/formAddPosition', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function modifyPosition($idposition = NULL){
		if ( isset($_POST['btnModifyPosition']) ){
			$formInfo = [];
			$formInfo['positiondesc'] = strtoupper($this->input->post('txtPositionName'));
			$formInfo['iddept'] = $this->input->post('selDepartment');
			$formInfo['level'] = $this->input->post('selLevel');
			if ( !$this->memployee->modifyPosition($formInfo, $idposition) ){
				redirect(base_url() . 'cemployee/modifyPosition/' . $idposition);
			} else {
				redirect(base_url() . 'cemployee/position');
			}
		}

		$data = [];
		$data['departments'] = $this->memployee->department();
		$data['getPositionByIds'] = $this->memployee->getPositionByIds($idposition);
		$data['positionIds'] = $this->memployee->positionIds($idposition);
		$data['header'] = $this->load->view('headers/head', '', TRUE);		
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);					
		$data['content'] = $this->load->view('forms/formEditPosition', $data, TRUE);		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$this->load->view('main', $data);	
	}

	public function deletePosition($idposition = ''){
		$this->memployee->deletePosition($idposition);
		redirect(base_url() . 'cemployee/position');
	}

	public function searchPosition($department = false, $position = false){
		$data = [];
		if ( !$position AND !$department){
			$position = $this->input->post('select_position');
			$department = $this->input->post('select_department');
		}
	
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['totalEmployee'] =  $this->memployee->countSearchPosition($department, $position);
	   	$config['base_url'] = base_url() . 'cemployee/searchPosition/' . $department . '/' . $position;
	    $config['total_rows'] = $data['totalEmployee'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '5';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['no'] = $this->uri->segment(5);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['departments'] = $this->memployee->department();
		$data['get_positions'] = $this->memployee->position();
		$data['positions'] = $this->memployee->positionListSearch($config['per_page'], $this->uri->segment(5), $department, $position);
		$data['content'] = $this->load->view('contents/vPosition', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);

		$this->load->view('main', $data);
	}

	public function client(){
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['totalEmployee'] =  $this->memployee->count_client();
	    $config["base_url"] = base_url() . "cemployee/client";
	    $config['total_rows'] = $data['totalEmployee'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['employees'] = $this->memployee->client_list($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/vClient', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}








	public function company(){		
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['total_company'] =  $this->memployee->count_company();
	    $config["base_url"] = base_url() . "cemployee/company";
	    $config['total_rows'] = $data['total_company'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '5';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['companies'] = $this->memployee->company_list($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/view_company', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function add_company(){
		if ( $this->input->post() ){
			$formInfo = [];
			$formInfo['txt_company'] = strtoupper($this->input->post('txt_company'));
			if ( $this->memployee->save_company($formInfo) ){
				redirect(base_url() . 'cemployee/add_company');
			} else {
				redirect(base_url() . 'cemployee/company');
			}
		}
		$data = [];
		$data['positions'] = $this->memployee->position();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/form_add_company', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function client_position(){		
		$data = [];
		$config = [];
		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li class="active"><span>';
	    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['first_link'] = '&laquo;';
	    $config['prev_link'] = '&lsaquo;';
	    $config['last_link'] = '&raquo;';
	    $config['next_link'] = '&rsaquo;';
	    $config['first_tag_open'] = '<li>';
	    $config['first_tag_close'] = '</li>';
	    $config['last_tag_open'] = '<li>';
	    $config['last_tag_close'] = '</li>';
	    $data['total_client_position'] =  $this->memployee->count_client_position();
	    $config["base_url"] = base_url() . "cemployee/client_position";
	    $config['total_rows'] = $data['total_client_position'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['positions'] = $this->memployee->client_position_list($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/view_client_position', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}
}

	