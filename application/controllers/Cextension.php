<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cextension extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('mextensions');
		$this->load->model('memployee');
				
	}

	public function phoneBook($argumentOfficeLocation){
		if ($argumentOfficeLocation === 'yard1') {
			$officeLocation = 'YARD 1';
		} elseif ($argumentOfficeLocation === 'yard2') {
			$officeLocation = 'YARD 2';
		} else {
			$officeLocation = 'SUKAJADI';
		}
		$data = [];
		$data['departments'] = $this->memployee->department();
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		// var_dump($data['departments']);die;
		// $data['phoneBooks'] = $this->mextensions->index($data['departments'], $officeLocation);
		$data['phoneBooks'] = $this->mextensions->index($data['departments'], $officeLocation);
		// var_dump($data['phoneBooks']);

		// die;
		// for ($i = 0; $i < sizeof($phoneBooks);$i++){
		// 	echo $phoneBooks[1][0]->employeename;
		// }
		
		

		// die;
		// var_dump($data['phoneBook']);
		// $department = ['deptdesc' => 'TOP MANAGEMENT'];
		// $data['topManagements'] = $this->mextensions->index('TOP MANAGEMENT', $officeLocation);
		// $data['strEngExtensions'] = $this->mextensions->index('STRUCTURAL ENGINEERING', $officeLocation);
		// $data['financeDepartments'] = $this->mextensions->index('FINANCE', $officeLocation);
		// $data['hrDepartments'] = $this->mextensions->index('HR', $officeLocation);
		// $data['hseDepartments'] = $this->mextensions->index('HSE', $officeLocation);
		// $data['misDepartments'] = $this->mextensions->index('MIS', $officeLocation);
		// $data['poDepartments'] = $this->mextensions->index('PROJECT & OPERATION', $officeLocation);
		// $data['yardDepartments'] = $this->mextensions->index('YARD', $officeLocation);
		// $data['structuralQaqcDepartments'] = $this->mextensions->index('STRUCTURAL QAQC', $officeLocation);
		// $data['scmDepartments'] = $this->mextensions->index('SUPPLY CHAIN', $officeLocation);
		// $data['teDepartments'] = $this->mextensions->index('TENDERING & ESTIMATION', $officeLocation);
		// $data['eiEngExtensions'] = $this->mextensions->index('E & I ENGINEERING', $officeLocation);
		// $data['eiQaqcDepartments'] = $this->mextensions->index('E & I QAQC', $officeLocation);
		// $data['meetingRooms'] = $this->mextensions->index('MEETING ROOM', $officeLocation);
		// $data['firstAids'] = $this->mextensions->index('FIRST AID', $officeLocation);
		$data['content'] = $this->load->view('contents/vExtension', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function client(){
		$data = [];
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients1'] = $this->mextensions->clients1();
		$data['clients2'] = $this->mextensions->clients2();
		$data['clients3'] = $this->mextensions->clients3();
		$data['clients4'] = $this->mextensions->clients4();
		$data['clients5'] = $this->mextensions->clients5();
		$data['clients6'] = $this->mextensions->clients6();
		$data['clients1_desc'] = $this->mextensions->clients1_desc();
		$data['clients2_desc'] = $this->mextensions->clients2_desc();
		$data['clients3_desc'] = $this->mextensions->clients3_desc();
		$data['clients4_desc'] = $this->mextensions->clients4_desc();
		$data['clients5_desc'] = $this->mextensions->clients5_desc();
		$data['clients6_desc'] = $this->mextensions->clients6_desc();		
		$data['content'] = $this->load->view('contents/vExtension_client', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function yard2($officeLocation){
		$officeLocation = 'YARD 2';
		$data = [];
		$data['departments'] = $this->memployee->department();
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['topManagements'] = $this->mextensions->index('TOP MANAGEMENT', $officeLocation);
		$data['strEngExtensions'] = $this->mextensions->index('STRUCTURAL ENGINEERING', $officeLocation);
		$data['financeDepartments'] = $this->mextensions->index('FINANCE', $officeLocation);
		$data['hrDepartments'] = $this->mextensions->index('HR', $officeLocation);
		$data['hseDepartments'] = $this->mextensions->index('HSE', $officeLocation);
		$data['misDepartments'] = $this->mextensions->index('MIS', $officeLocation);
		$data['poDepartments'] = $this->mextensions->index('PROJECT & OPERATION', $officeLocation);
		$data['structuralQaqcDepartments'] = $this->mextensions->index('STRUCTURAL QAQC', $officeLocation);
		$data['scmDepartments'] = $this->mextensions->index('SUPPLY CHAIN', $officeLocation);
		$data['teDepartments'] = $this->mextensions->index('TENDERING & ESTIMATION', $officeLocation);
		$data['eiEngExtensions'] = $this->mextensions->index('E & I ENGINEERING', $officeLocation);
		$data['eiQaqcDepartments'] = $this->mextensions->index('E & I QAQC', $officeLocation);
		$data['meetingRooms'] = $this->mextensions->index('MEETING ROOM', $officeLocation);
		$data['firstAids'] = $this->mextensions->index('FIRST AID', $officeLocation);
		$data['securities'] = $this->mextensions->index('FIRST AID', $officeLocation);
		$data['topManagements_yard2_desc'] = $this->mextensions->topManagements_yard2_desc();
		$data['financeDepartments_yard2_desc'] = $this->mextensions->financeDepartments_yard2_desc();
		$data['hrDepartments_yard2_desc'] = $this->mextensions->hrDepartments_yard2_desc();
		$data['hseDepartments_yard2_desc'] = $this->mextensions->hseDepartments_yard2_desc();
		$data['misDepartments_yard2_desc'] = $this->mextensions->misDepartments_yard2_desc();
		$data['poDepartments_yard2_desc'] = $this->mextensions->poDepartments_yard2_desc();
		$data['structuralQaqcDepartments_yard2_desc'] = $this->mextensions->structuralQaqcDepartments_yard2_desc();
		$data['scmDepartments_yard2_desc'] = $this->mextensions->scmDepartments_yard2_desc();
		$data['teDepartments_yard2_desc'] = $this->mextensions->teDepartments_yard2_desc();
		$data['eiEngExtensions_yard2_desc'] = $this->mextensions->eiEngineering_yard2_desc();
		$data['eiQaqcDepartments_yard2_desc'] = $this->mextensions->eiQaqcDepartments_yard2_desc();
		$data['meetingRooms_yard2_desc'] = $this->mextensions->meetingRooms_yard2_desc();
		$data['firstAids_yard2_desc'] = $this->mextensions->firstAids_yard2_desc();
		$data['securities_yard2_desc'] = $this->mextensions->securities_yard2_desc();	
		$data['topManagements_yard2_desc'] = $this->mextensions->index('TOP MANAGEMENT', $officeLocation, TRUE);
		$data['strEngExtensions_yard2_desc'] = $this->mextensions->index('STRUCTURAL ENGINEERING', $officeLocation, TRUE);
		$data['financeDepartments_yard2_desc'] = $this->mextensions->index('FINANCE', $officeLocation, TRUE);
		$data['hrDepartments_yard2_desc'] = $this->mextensions->index('HR', $officeLocation, TRUE);
		$data['hseDepartments_yard2_desc'] = $this->mextensions->index('HSE', $officeLocation, TRUE);
		$data['misDepartments_yard2_desc'] = $this->mextensions->index('MIS', $officeLocation, TRUE);
		$data['poDepartments_yard2_desc'] = $this->mextensions->index('PROJECT & OPERATION', $officeLocation, TRUE);
		$data['structuralQaqcDepartments_yard2_desc'] = $this->mextensions->index('STRUCTURAL QAQC', $officeLocation, TRUE);
		$data['scmDepartments_yard2_desc'] = $this->mextensions->index('SUPPLY CHAIN', $officeLocation, TRUE);
		$data['teDepartments_yard2_desc'] = $this->mextensions->index('TENDERING & ESTIMATION', $officeLocation, TRUE);
		$data['eiEngExtensions_yard2_desc'] = $this->mextensions->index('E & I ENGINEERING', $officeLocation, TRUE);
		$data['eiQaqcDepartments_yard2_desc'] = $this->mextensions->index('E & I QAQC', $officeLocation, TRUE);
		$data['meetingRooms_yard2_desc'] = $this->mextensions->index('MEETING ROOM', $officeLocation, TRUE);
		$data['firstAids_yard2_desc'] = $this->mextensions->index('FIRST AID', $officeLocation, TRUE);
		$data['securities_yard2_desc'] = $this->mextensions->index('SECURITY POST', $officeLocation, TRUE);	
		$data['content'] = $this->load->view('contents/vExtension', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function client_yard2(){
		$data = [];
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients1'] = $this->mextensions->clients1_yard2();
		$data['clients2'] = $this->mextensions->clients2_yard2();
		$data['clients3'] = $this->mextensions->clients3_yard2();
		$data['clients4'] = $this->mextensions->clients4_yard2();
		$data['clients5'] = $this->mextensions->clients5_yard2();
		$data['clients6'] = $this->mextensions->clients6_yard2();
		$data['clients1_desc'] = $this->mextensions->clients1_yard2_desc();
		$data['clients2_desc'] = $this->mextensions->clients2_yard2_desc();
		$data['clients3_desc'] = $this->mextensions->clients3_yard2_desc();
		$data['clients4_desc'] = $this->mextensions->clients4_yard2_desc();
		$data['clients5_desc'] = $this->mextensions->clients5_yard2_desc();
		$data['clients6_desc'] = $this->mextensions->clients6_yard2_desc();
		$data['content'] = $this->load->view('contents/v_extension_client_yard2', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	public function sukajadi(){
		$officeLocation = 'SUKAJADI';
		$data = [];
		$data['departments'] = $this->memployee->department();
		$data['navigation'] = $this->load->view('headers/navigation', '', TRUE);
		$data['header'] = $this->load->view('headers/head', '', TRUE);
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['topManagements'] = $this->mextensions->index('TOP MANAGEMENT', $officeLocation);
		$data['strEngExtensions'] = $this->mextensions->index('STRUCTURAL ENGINEERING', $officeLocation);
		$data['financeDepartments'] = $this->mextensions->index('FINANCE', $officeLocation);
		$data['hrDepartments'] = $this->mextensions->index('HR', $officeLocation);
		$data['hseDepartments'] = $this->mextensions->index('HSE', $officeLocation);
		$data['misDepartments'] = $this->mextensions->index('MIS', $officeLocation);
		$data['poDepartments'] = $this->mextensions->index('PROJECT & OPERATION', $officeLocation);
		$data['yardDepartments'] = $this->mextensions->index('YARD', $officeLocation);
		$data['structuralQaqcDepartments'] = $this->mextensions->index('STRUCTURAL QAQC', $officeLocation);
		$data['scmDepartments'] = $this->mextensions->index('SUPPLY CHAIN', $officeLocation);
		$data['teDepartments'] = $this->mextensions->index('TENDERING & ESTIMATION', $officeLocation);
		$data['eiEngExtensions'] = $this->mextensions->index('E & I ENGINEERING', $officeLocation);
		$data['eiQaqcDepartments'] = $this->mextensions->index('E & I QAQC', $officeLocation);
		$data['meetingRooms'] = $this->mextensions->index('MEETING ROOM', $officeLocation);
		$data['firstAids'] = $this->mextensions->index('FIRST AID', $officeLocation);
		$data['securities'] = $this->mextensions->index('SECURITY POST', $officeLocation);
		$data['topManagements_sukajadi_desc'] = $this->mextensions->index('TOP MANAGEMENT', $officeLocation, TRUE);
		$data['strEngExtensions_sukajadi_desc'] = $this->mextensions->index('STRUCTURAL ENGINEERING', $officeLocation, TRUE);
		$data['financeDepartments_sukajadi_desc'] = $this->mextensions->index('FINANCE', $officeLocation, TRUE);
		$data['hrDepartments_sukajadi_desc'] = $this->mextensions->index('HR', $officeLocation, TRUE);
		$data['hseDepartments_sukajadi_desc'] = $this->mextensions->index('HSE', $officeLocation, TRUE);
		$data['misDepartments_sukajadi_desc'] = $this->mextensions->index('MIS', $officeLocation, TRUE);
		$data['poDepartments_sukajadi_desc'] = $this->mextensions->index('PROJECT & OPERATION', $officeLocation, TRUE);
		$data['structuralQaqcDepartments_sukajadi_desc'] = $this->mextensions->index('STRUCTURAL QAQC', $officeLocation, TRUE);
		$data['scmDepartments_sukajadi_desc'] = $this->mextensions->index('SUPPLY CHAIN', $officeLocation, TRUE);
		$data['teDepartments_sukajadi_desc'] = $this->mextensions->index('TENDERING & ESTIMATION', $officeLocation, TRUE);
		$data['eiEngExtensions_sukajadi_desc'] = $this->mextensions->index('E & I ENGINEERING', $officeLocation, TRUE);
		$data['eiQaqcDepartments_sukajadi_desc'] = $this->mextensions->index('E & I QAQC', $officeLocation, TRUE);
		$data['meetingRooms_sukajadi_desc'] = $this->mextensions->index('MEETING ROOM', $officeLocation, TRUE);
		$data['firstAids_sukajadi_desc'] = $this->mextensions->index('FIRST AID', $officeLocation, TRUE);
		$data['securities_sukajadi_desc'] = $this->mextensions->index('SECURITY POST', $officeLocation, TRUE);	
		$data['content'] = $this->load->view('contents/v_extension_sukajadi', $data, TRUE);
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);
		$this->load->view('main', $data);
	}

	// PDF

	// PDF Yard 1
	public function pdf_extension_wasco_y1(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['topManagements'] = $this->mextensions->topManagements();
		$data['strEngExtensions'] = $this->mextensions->strEngineering();
		$data['financeDepartments'] = $this->mextensions->financeDepartments();
		$data['hrDepartments'] = $this->mextensions->hrDepartments();
		$data['hseDepartments'] = $this->mextensions->hseDepartments();
		$data['misDepartments'] = $this->mextensions->misDepartments();
		$data['poDepartments'] = $this->mextensions->poDepartments();
		$data['structuralQaqcDepartments'] = $this->mextensions->structuralQaqcDepartments();
		$data['scmDepartments'] = $this->mextensions->scmDepartments();
		$data['teDepartments'] = $this->mextensions->teDepartments();
		$data['eiEngExtensions'] = $this->mextensions->eiEngineering();
		$data['eiQaqcDepartments'] = $this->mextensions->eiQaqcDepartments();
		$data['meetingRooms'] = $this->mextensions->meetingRooms();
		$data['firstAids'] = $this->mextensions->firstAids();
		$data['securities'] = $this->mextensions->securities();
		$data['topManagements_desc'] = $this->mextensions->topManagements_desc();
		$data['strEngExtensions_desc'] = $this->mextensions->strEngineering_desc();
		$data['financeDepartments_desc'] = $this->mextensions->financeDepartments_desc();
		$data['hrDepartments_desc'] = $this->mextensions->hrDepartments_desc();
		$data['hseDepartments_desc'] = $this->mextensions->hseDepartments_desc();
		$data['misDepartments_desc'] = $this->mextensions->misDepartments_desc();
		$data['poDepartments_desc'] = $this->mextensions->poDepartments_desc();
		$data['structuralQaqcDepartments_desc'] = $this->mextensions->structuralQaqcDepartments_desc();
		$data['scmDepartments_desc'] = $this->mextensions->scmDepartments_desc();
		$data['teDepartments_desc'] = $this->mextensions->teDepartments_desc();
		$data['eiEngExtensions_desc'] = $this->mextensions->eiEngineering_desc();
		$data['eiQaqcDepartments_desc'] = $this->mextensions->eiQaqcDepartments_desc();
		$data['meetingRooms_desc'] = $this->mextensions->meetingRooms_desc();
		$data['firstAids_desc'] = $this->mextensions->firstAids_desc();
		$data['securities_desc'] = $this->mextensions->securities_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);	
		$html = $this->load->view('contents/v_pdf_extension_wasco_y1', $data, TRUE);

		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		//$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L']);
		
		//$mpdf->WriteHTML($html);
		//$mpdf->Output();
	}	

	
	public function pdf_top_management(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['topManagements'] = $this->mextensions->topManagements();
		$data['topManagements_desc'] = $this->mextensions->topManagements_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_top_management', $data, TRUE);
		$mp*df->WriteHTML($html);
		$mpdf->Output();*/
		$html = $this->load->view('contents/v_pdf_top_management', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_meeting_room(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['meetingRooms'] = $this->mextensions->meetingRooms();
		$data['meetingRooms_desc'] = $this->mextensions->meetingRooms_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		$html = $this->load->view('contents/v_pdf_meeting_room', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		//$stylesheet = file_get_contents('css/pdfstyle.css');
		//$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_meeting_room', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
	}

	public function pdf_hr_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['hrDepartments'] = $this->mextensions->hrDepartments();
		$data['hrDepartments_desc'] = $this->mextensions->hrDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		$html = $this->load->view('contents/v_pdf_hr_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_hr_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
	}

	public function pdf_security(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['securities'] = $this->mextensions->securities();
		$data['securities_desc'] = $this->mextensions->securities_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		$html = $this->load->view('contents/v_pdf_security', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
	}

	public function pdf_first_aid(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['firstAids'] = $this->mextensions->firstAids();
		$data['firstAids_desc'] = $this->mextensions->firstAids_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		$html = $this->load->view('contents/v_pdf_first_aid', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
	}

	public function pdf_te_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['teDepartments'] = $this->mextensions->teDepartments();
		$data['teDepartments_desc'] = $this->mextensions->teDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		$html = $this->load->view('contents/v_pdf_te_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
	}

	public function pdf_hse_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['hseDepartments'] = $this->mextensions->hseDepartments();
		$data['hseDepartments_desc'] = $this->mextensions->hseDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		$html = $this->load->view('contents/v_pdf_hse_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
	}

	public function pdf_finance_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['financeDepartments'] = $this->mextensions->financeDepartments();
		$data['financeDepartments_desc'] = $this->mextensions->financeDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		
		$html = $this->load->view('contents/v_pdf_finance_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
	}

	public function pdf_mis_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['misDepartments'] = $this->mextensions->misDepartments();
		$data['misDepartments_desc'] = $this->mextensions->misDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_mis_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_mis_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_str_qaqc_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['structuralQaqcDepartments'] = $this->mextensions->structuralQaqcDepartments();
		$data['structuralQaqcDepartments_desc'] = $this->mextensions->structuralQaqcDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_str_qaqc_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_str_qaqc_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_ei_qaqc_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['eiQaqcDepartments'] = $this->mextensions->eiQaqcDepartments();
		$data['eiQaqcDepartments_desc'] = $this->mextensions->eiQaqcDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_ei_qaqc_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
		
		$html = $this->load->view('contents/v_pdf_ei_qaqc_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_scm_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['scmDepartments'] = $this->mextensions->scmDepartments();
		$data['scmDepartments_desc'] = $this->mextensions->scmDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_scm_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
		
		$html = $this->load->view('contents/v_pdf_scm_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_str_eng_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['strEngExtensions'] = $this->mextensions->strEngineering();
		$data['strEngExtensions_desc'] = $this->mextensions->strEngineering_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_str_eng_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_str_eng_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_po_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['poDepartments'] = $this->mextensions->poDepartments();
		$data['poDepartments_desc'] = $this->mextensions->poDepartments_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_po_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
		
		$html = $this->load->view('contents/v_pdf_po_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_ei_eng_department(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['eiEngExtensions'] = $this->mextensions->eiEngineering();
		$data['eiEngExtensions_desc'] = $this->mextensions->eiEngineering_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_ei_eng_department', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
		
		$html = $this->load->view('contents/v_pdf_ei_eng_department', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_extension_client_y1(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients1'] = $this->mextensions->clients1();
		$data['clients2'] = $this->mextensions->clients2();
		$data['clients3'] = $this->mextensions->clients3();
		$data['clients4'] = $this->mextensions->clients4();
		$data['clients5'] = $this->mextensions->clients5();
		$data['clients6'] = $this->mextensions->clients6();
		$data['clients1_desc'] = $this->mextensions->clients1_desc();
		$data['clients2_desc'] = $this->mextensions->clients2_desc();
		$data['clients3_desc'] = $this->mextensions->clients3_desc();
		$data['clients4_desc'] = $this->mextensions->clients4_desc();
		$data['clients5_desc'] = $this->mextensions->clients5_desc();
		$data['clients6_desc'] = $this->mextensions->clients6_desc();		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);	
		
/*		
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L']);
		$html = $this->load->view('contents/v_pdf_extension_client_y1', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	*/	
		
		$html = $this->load->view('contents/v_pdf_extension_client_y1', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client1(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients1'] = $this->mextensions->clients1();
		$data['clients1_desc'] = $this->mextensions->clients1_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client1', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client1', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients2'] = $this->mextensions->clients2();
		$data['clients2_desc'] = $this->mextensions->clients2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client3(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients3'] = $this->mextensions->clients3();
		$data['clients3_desc'] = $this->mextensions->clients3_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client3', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client3', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client4(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients4'] = $this->mextensions->clients4();
		$data['clients4_desc'] = $this->mextensions->clients4_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client4', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client4', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client5(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients5'] = $this->mextensions->clients5();
		$data['clients5_desc'] = $this->mextensions->clients5_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client5', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
		
		$html = $this->load->view('contents/v_pdf_client5', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
	}

	public function pdf_client6(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients6'] = $this->mextensions->clients6();
		$data['clients6_desc'] = $this->mextensions->clients6_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client6', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client6', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	// End of PDF Yard 1

	// PDF Yard 2
	public function pdf_extension_wasco_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['topManagements'] = $this->mextensions->topManagements_yard2();
		$data['strEngExtensions'] = $this->mextensions->str_engineering_yard2();
		$data['financeDepartments'] = $this->mextensions->financeDepartments_yard2();
		$data['hrDepartments'] = $this->mextensions->hrDepartments_yard2();
		$data['hseDepartments'] = $this->mextensions->hseDepartments_yard2();
		$data['misDepartments'] = $this->mextensions->misDepartments_yard2();
		$data['poDepartments'] = $this->mextensions->poDepartments_yard2();
		$data['structuralQaqcDepartments'] = $this->mextensions->structuralQaqcDepartments_yard2();
		$data['scmDepartments'] = $this->mextensions->scmDepartments_yard2();
		$data['teDepartments'] = $this->mextensions->teDepartments_yard2();
		$data['eiEngExtensions'] = $this->mextensions->eiEngineering_yard2();
		$data['eiQaqcDepartments'] = $this->mextensions->eiQaqcDepartments_yard2();
		$data['meetingRooms'] = $this->mextensions->meetingRooms_yard2();
		$data['firstAids'] = $this->mextensions->firstAids_yard2();
		$data['securities'] = $this->mextensions->securities_yard2();
		$data['topManagements_yard2_desc'] = $this->mextensions->topManagements_yard2_desc();
		$data['strEngExtensions_yard2_desc'] = $this->mextensions->str_engineering_yard2_desc();
		$data['financeDepartments_yard2_desc'] = $this->mextensions->financeDepartments_yard2_desc();
		$data['hrDepartments_yard2_desc'] = $this->mextensions->hrDepartments_yard2_desc();
		$data['hseDepartments_yard2_desc'] = $this->mextensions->hseDepartments_yard2_desc();
		$data['misDepartments_yard2_desc'] = $this->mextensions->misDepartments_yard2_desc();
		$data['poDepartments_yard2_desc'] = $this->mextensions->poDepartments_yard2_desc();
		$data['structuralQaqcDepartments_yard2_desc'] = $this->mextensions->structuralQaqcDepartments_yard2_desc();
		$data['scmDepartments_yard2_desc'] = $this->mextensions->scmDepartments_yard2_desc();
		$data['teDepartments_yard2_desc'] = $this->mextensions->teDepartments_yard2_desc();
		$data['eiEngExtensions_yard2_desc'] = $this->mextensions->eiEngineering_yard2_desc();
		$data['eiQaqcDepartments_yard2_desc'] = $this->mextensions->eiQaqcDepartments_yard2_desc();
		$data['meetingRooms_yard2_desc'] = $this->mextensions->meetingRooms_yard2_desc();
		$data['firstAids_yard2_desc'] = $this->mextensions->firstAids_yard2_desc();
		$data['securities_yard2_desc'] = $this->mextensions->securities_yard2_desc();		
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);	
				
		/*$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L']);
		$html = $this->load->view('contents/v_pdf_extension_wasco_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
		*/
		
		$html = $this->load->view('contents/v_pdf_extension_wasco_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_top_management_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['topManagements'] = $this->mextensions->topManagements_yard2();
		$data['topManagements_yard2_desc'] = $this->mextensions->topManagements_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_top_management_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_top_management_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_meeting_room_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['meetingRooms'] = $this->mextensions->meetingRooms_yard2();
		$data['meetingRooms_yard2_desc'] = $this->mextensions->meetingRooms_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_meeting_room_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_meeting_room_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_hr_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['hrDepartments'] = $this->mextensions->hrDepartments_yard2();
		$data['hrDepartments_yard2_desc'] = $this->mextensions->hrDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_hr_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_hr_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_security_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['securities'] = $this->mextensions->securities_yard2();
		$data['securities_yard2_desc'] = $this->mextensions->securities_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_security_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		
		$html = $this->load->view('contents/v_pdf_security_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_first_aid_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['firstAids'] = $this->mextensions->firstAids_yard2();
		$data['firstAids_yard2_desc'] = $this->mextensions->firstAids_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_first_aid_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_first_aid_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_te_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['teDepartments'] = $this->mextensions->teDepartments_yard2();
		$data['teDepartments_yard2_desc'] = $this->mextensions->teDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_te_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_te_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_hse_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['hseDepartments'] = $this->mextensions->hseDepartments_yard2();
		$data['hseDepartments_yard2_desc'] = $this->mextensions->hseDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_hse_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_hse_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_finance_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['financeDepartments'] = $this->mextensions->financeDepartments_yard2();
		$data['financeDepartments_yard2_desc'] = $this->mextensions->financeDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_finance_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_finance_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_mis_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['misDepartments'] = $this->mextensions->misDepartments_yard2();
		$data['misDepartments_yard2_desc'] = $this->mextensions->misDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_mis_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_mis_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_str_qaqc_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['structuralQaqcDepartments'] = $this->mextensions->structuralQaqcDepartments_yard2();
		$data['structuralQaqcDepartments_yard2_desc'] = $this->mextensions->structuralQaqcDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_str_qaqc_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_str_qaqc_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_ei_qaqc_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['eiQaqcDepartments'] = $this->mextensions->eiQaqcDepartments_yard2();
		$data['eiQaqcDepartments_yard2_desc'] = $this->mextensions->eiQaqcDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_ei_qaqc_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_ei_qaqc_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_scm_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['scmDepartments'] = $this->mextensions->scmDepartments_yard2();
		$data['scmDepartments_yard2_desc'] = $this->mextensions->scmDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_scm_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_scm_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_str_eng_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['strEngExtensions'] = $this->mextensions->str_engineering_yard2();
		$data['strEngExtensions_yard2_desc'] = $this->mextensions->str_engineering_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_str_eng_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_str_eng_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
	}

	public function pdf_po_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['poDepartments'] = $this->mextensions->poDepartments_yard2();
		$data['poDepartments_yard2_desc'] = $this->mextensions->poDepartments_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_po_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_po_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_ei_eng_department_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['eiEngExtensions'] = $this->mextensions->eiEngineering_yard2();
		$data['eiEngExtensions_yard2_desc'] = $this->mextensions->eiEngineering_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_ei_eng_department_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_ei_eng_department_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_extension_client_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients1'] = $this->mextensions->clients1_yard2();
		$data['clients2'] = $this->mextensions->clients2_yard2();
		$data['clients3'] = $this->mextensions->clients3_yard2();
		$data['clients4'] = $this->mextensions->clients4_yard2();
		$data['clients5'] = $this->mextensions->clients5_yard2();
		$data['clients6'] = $this->mextensions->clients6_yard2();
		$data['clients1_desc'] = $this->mextensions->clients1_yard2_desc();
		$data['clients2_desc'] = $this->mextensions->clients2_yard2_desc();
		$data['clients3_desc'] = $this->mextensions->clients3_yard2_desc();
		$data['clients4_desc'] = $this->mextensions->clients4_yard2_desc();
		$data['clients5_desc'] = $this->mextensions->clients5_yard2_desc();
		$data['clients6_desc'] = $this->mextensions->clients6_yard2_desc();	
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);	
		/*		
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A3-L']);
		$html = $this->load->view('contents/v_pdf_extension_client_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_extension_client_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client1_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients1'] = $this->mextensions->clients1_yard2();
		$data['clients1_desc'] = $this->mextensions->clients1_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client1_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client1_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client2_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients2'] = $this->mextensions->clients2_yard2();
		$data['clients2_desc'] = $this->mextensions->clients2_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client2_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client2_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client3_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients3'] = $this->mextensions->clients3_yard2();
		$data['clients3_desc'] = $this->mextensions->clients3_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client3_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client3_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client4_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients4'] = $this->mextensions->clients4_yard2();
		$data['clients4_desc'] = $this->mextensions->clients4_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client4_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client4_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	public function pdf_client5_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients5'] = $this->mextensions->clients5_yard2();
		$data['clients5_desc'] = $this->mextensions->clients5_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client5_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		
		$html = $this->load->view('contents/v_pdf_client5_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
		
		
	}

	public function pdf_client6_y2(){
		$data = [];
		$data['cover'] = $this->load->view('headers/cover', '', TRUE);
		$data['clients6'] = $this->mextensions->clients6_yard2();
		$data['clients6_desc'] = $this->mextensions->clients6_yard2_desc();
		$data['footer'] = $this->load->view('footers/footer', '', TRUE);		
		/*
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
		$html = $this->load->view('contents/v_pdf_client6_y2', $data, TRUE);
		$mpdf->WriteHTML($html);
		$mpdf->Output();*/
		
		$html = $this->load->view('contents/v_pdf_client6_y2', $data, TRUE);
		include("library/MPDF54/mpdf.php");
		$mpdf = new mPDF('',    // mode - default ''
		 '',    // format - A4, for example, default ''
			 8,     // font size - default 0
			 '',    // default font family
			 15,    // margin_left
			 15,    // margin right
			 10,     // margin top
			 10,    // margin bottom
			 5,     // margin header
			 9,     // margin footer
			 'P');  // L - landscape, P - portrait

		$mpdf->SetDisplayMode('fullpage');
		
		$mpdf->list_indent_first_level = 0;

		$stylesheet = file_get_contents('css/pdfstyle.css');
		$mpdf->WriteHTML($stylesheet,1);

		$mpdf->WriteHTML($html,2);

		$mpdf->Output('extension.pdf','I');
		exit;
	}

	// end of PDF Yard 2
}

	