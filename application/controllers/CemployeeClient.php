
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CemployeeClient extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('memployeeClient');
		$this->load->model('mpabx11');		
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
	    $data['totalEmployee'] =  $this->memployeeClient->countEmployee();
	    $config["base_url"] = base_url() . "cemployee/index";
	    $config['total_rows'] = $data['totalEmployee'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['employees'] = $this->memployeeClient->employeeList($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/vClient', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}
	public function addEmployee(){
		if ( $this->input->post() ){
			$formInfo = [];
			$formInfo['employeeno'] = $this->input->post('txtEmployeeNo', TRUE);
			$formInfo['employeename'] = strtoupper($this->input->post('txtEmployee', TRUE));
			$formInfo['iddept'] = $this->input->post('selDepartment', TRUE);
			$formInfo['idposition'] = $this->input->post('selPosition');
			$formInfo['extId'] = $this->input->post('selExtension', TRUE);					
			if ( !$this->memployeeClient->saveEmployee($formInfo) ){				
				redirect(base_url() . 'cemployee/addEmployee');
			}else{
				$this->mpabx11->updateExtensionStatusAdd($formInfo['extId']);
				redirect(base_url() . 'cemployee');
			}
		}

		$data = [];
		$data['extensions'] = $this->mpabx11->index();
		$data['departments'] = $this->memployeeClient->department();
		$data['positions'] = $this->memployeeClient->position();
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
			$formInfo['extId'] = $this->input->post('selExtension');
			$formInfo['txtprevid'] = $this->input->post('txtprevid');
			if ( !$this->memployeeClient->modifyEmployee($formInfo, $employeeId) ){				
				redirect(base_url() . 'cemployee/modifyEmployee/' . $employeeId);
			} else {
				$this->mpabx11->updateExtensionStatus($formInfo['extId'],$formInfo['txtprevid']);
				redirect(base_url() . 'cemployee');
			}
		}

		$data = [];
		$data['extensions'] = $this->mpabx11->index();
		$data['employees'] = $this->memployeeClient->employeeIds($employeeId);
		$data['getEmployeeByIds'] = $this->memployeeClient->getEmployeeByIds($employeeId);
		$data['departments'] = $this->memployeeClient->department();
		$data['positions'] = $this->memployeeClient->position();
		$data['header'] = $this->load->view('headers/head', '', TRUE);		
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);					
		$data['content'] = $this->load->view('forms/formEditEmployee', $data, TRUE);		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$this->load->view('main', $data);	
	}

	public function search(){
		$data = [];
		$data['searchCategory'] = $this->input->post('selCategory');
		$data['txtSearch'] = htmlspecialchars($this->input->post('txtSearch'));
		// var_dump($data['searchCategory']);var_dump($data['txtSearch']);die;
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
	    $data['totalEmployee'] =  $this->memployeeClient->countEmployeeSearch($data['searchCategory'], $data['txtSearch']);
	   	$config["base_url"] = base_url() . "cemployee/search/";
	    $config['total_rows'] = $data['totalEmployee'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);


		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['employees'] = $this->memployeeClient->employeeListSearch($config['per_page'], $this->uri->segment(3),  $data['searchCategory'], $data['txtSearch']);
		$data['content'] = $this->load->view('contents/vEmployee', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);

		$this->load->view('main', $data);
	}

	// public function deleteEmployee($idEmployee = ''){
	// 	$this->memployeeClient->deleteEmployee($idEmployee);
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
	    $data['totalDepartment'] =  $this->memployeeClient->countDepartment();
	    $config["base_url"] = base_url() . "cemployee/department";
	    $config['total_rows'] = $data['totalDepartment'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '5';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['departments'] = $this->memployeeClient->departmentList($config['per_page'], $this->uri->segment(3));
		$data['content'] = $this->load->view('contents/vDepartment', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function addCompany(){
		if ( $this->input->post() ){
			$formInfo = [];
			$formInfo['txtDepartment'] = strtoupper($this->input->post('txtDepartment'));
			if ( $this->memployeeClient->saveDepartment($formInfo) ){
				redirect(base_url() . 'cemployee/addDepartment');
			} else {
				redirect(base_url() . 'cemployee/department');
			}
		}
		$data = [];
		$data['departments'] = $this->memployeeClient->department();
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['content'] = $this->load->view('forms/formAddDepartment', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function modifyDepartment($iddept = NULL){
		if ( isset($_POST['btnModifyDepartment']) ){
			$formInfo = [];
			$formInfo['deptdesc'] = strtoupper($this->input->post('txtDepartmentName'));
			if ( !$this->memployeeClient->modifyDepartment($formInfo, $iddept) ){
				redirect(base_url() . 'cemployee/modifyDepartment/' . $iddept);
			} else {
				redirect(base_url() . 'cemployee/department');
			}
		}

		$data = [];
		$data['getDepartmentByIds'] = $this->memployeeClient->getDepartmentByIds($iddept);
		$data['departmentIds'] = $this->memployeeClient->departmentIds($iddept);
		$data['header'] = $this->load->view('headers/head', '', TRUE);		
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);					
		$data['content'] = $this->load->view('forms/formEditDepartment', $data, TRUE);		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$this->load->view('main', $data);	
	}

	public function deleteDepartment($iddept = ''){
		$this->memployeeClient->deleteDepartment($iddept);
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
	    $data['totalPosition'] =  $this->memployeeClient->countPosition();
	    $config["base_url"] = base_url() . "cemployee/position";
	    $config['total_rows'] = $data['totalPosition'];
	    $config['per_page'] = '10';
	    $config['uri_segment'] = '3';
	    $this->pagination->initialize($config);

		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['positions'] = $this->memployeeClient->positionList($config['per_page'], $this->uri->segment(3));
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
			if ( $this->memployeeClient->savePosition($formInfo) ){
				redirect(base_url() . 'cemployee/addPosition');
			} else {
				redirect(base_url() . 'cemployee/position');
			}
		}
		$data = [];
		$data['positions'] = $this->memployeeClient->position();
		$data['departments'] = $this->memployeeClient->department();		
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
			if ( !$this->memployeeClient->modifyPosition($formInfo, $idposition) ){
				redirect(base_url() . 'cemployee/modifyPosition/' . $idposition);
			} else {
				redirect(base_url() . 'cemployee/position');
			}
		}

		$data = [];
		$data['getPositionByIds'] = $this->memployeeClient->getPositionByIds($idposition);
		$data['positionIds'] = $this->memployeeClient->positionIds($idposition);
		$data['header'] = $this->load->view('headers/head', '', TRUE);		
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);					
		$data['content'] = $this->load->view('forms/formEditPosition', $data, TRUE);		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$this->load->view('main', $data);	
	}

	public function deletePosition($idposition = ''){
		$this->memployeeClient->deletePosition($idposition);
		redirect(base_url() . 'cemployee/position');
	}	
}

	