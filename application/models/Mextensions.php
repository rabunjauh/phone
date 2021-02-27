<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mextensions
extends CI_Model {

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
	}

	public function index($department, $officeLocation, $desc = FALSE){
		$departmentDesc = $this->memployee->department();
		foreach ($departmentDesc as $value) {
			if ($value->deptdesc === $department) {
				$iddept = $value->iddept;
			}
		}

		$sql = "SELECT 
				te.employeename,
				te.ext,
				ext.extension,
				td.deptdesc,
				tp.positiondesc 
			FROM tblmas_employee te 
			LEFT JOIN ext ON te.extId = ext.id 
			LEFT JOIN tblfile_department td ON te.iddept = td.iddept 
			LEFT JOIN tblfile_position tp ON te.idposition = tp.idposition
			LEFT JOIN office_location ol ON te.office_location_id = ol.office_location_id 
			WHERE te.iddept = $iddept 
				AND te.stsactive = '1' 
				AND te.extId != '0' 
				AND ol.office_location_desc = '$officeLocation' 
			ORDER BY tp.level ASC";
		$query = $this->db->query($sql);
		if ($desc) {
			return $query->row();
		}
		return $query->result();
	}
	// end of Yard 1 Wasco

	// Yard 1 Client 
	public function clients1(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c1'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 1' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c2'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 1' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients3(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c3'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 1' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients4(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c4'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 1' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients5(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c5'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 1' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients6(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c6'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 1' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients1_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c1' 
		AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c2' 
		AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients3_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c3' 
		AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients4_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c4' 
		AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients5_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c5' 
		AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients6_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c6' 
		AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	// end of Yard 1 Client

	// Yard 2 Wasco
	public function topManagements_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.iddept = '18' 
		 AND tblmas_employee.stsactive = '1' 
		 AND tblmas_employee.extId != '0' 
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function str_engineering_yard2()
	{
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.iddept = '1' 
		 AND tblmas_employee.stsactive = '1' 
		 AND tblmas_employee.extId != '0' 
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function financeDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '2' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hrDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '3' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hseDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '4' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function misDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '5' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function poDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '6' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function yardDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '12' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function structuralQaqcDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '7' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function scmDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '9' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function teDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '15' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function eiEngineering_yard2()
	{
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.iddept = '16' 
		 AND tblmas_employee.stsactive = '1'  
		 AND tblmas_employee.extId != '0' 
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function eiQaqcDepartments_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '19' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function meetingRooms_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '23' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function firstAids_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '24' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}	

	public function securities_yard2()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '25' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function topManagements_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.iddept = '18' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

		public function str_engineering_yard2_desc()
	{
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.iddept = '1' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function financeDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '2' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hrDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '3' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hseDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '4' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function misDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '5' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function poDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '6' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function yardDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '12' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function structuralQaqcDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '7' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function scmDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '9' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function teDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '15' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function eiEngineering_yard2_desc()
	{
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.iddept = '16' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function eiQaqcDepartments_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '19' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function meetingRooms_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '23' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function firstAids_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '24' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}	

	public function securities_yard2_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '25' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}
	// end of Yard 2 Wasco

	// Yard 2 Client 
		public function clients1_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c1'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients2_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c2'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients3_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c3'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients4_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c4'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients5_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c5'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients6_yard2(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.code = 'c6'  
		 AND tblmas_employee.extId != '0'  
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients1_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c1' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients2_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c2' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients3_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c3' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients4_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c4' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients5_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c5' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients6_yard2_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.code = 'c6' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	// end of Yard 2 Client
	
	
	// Sukajadi Wasco
	public function topManagements_sukajadi(){
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.iddept = '18' 
		 AND tblmas_employee.stsactive = '1' 
		 AND tblmas_employee.extId != '0' 
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function str_engineering_sukajadi()
	{
		$sql = "SELECT
		tblmas_employee.employeename,
		tblmas_employee.office_location_id,
		tblmas_employee.ext
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.iddept = '1' 
		 AND tblmas_employee.stsactive = '1' 
		 AND tblmas_employee.extId != '0' 
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function financeDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '2' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hrDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '3' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hseDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '4' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function misDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '5' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function poDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '6' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function yardDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '12' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function structuralQaqcDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '7' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function scmDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '9' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function teDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '15' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function eiEngineering_sukajadi()
	{
		$sql = "SELECT
		tblmas_employee.employeename,
		ext.extension,
		tblfile_department.deptdesc,
		 tblfile_position.positiondesc 
		 FROM tblmas_employee 
		 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
		 WHERE tblmas_employee.iddept = '16' 
		 AND tblmas_employee.stsactive = '1'  
		 AND tblmas_employee.extId != '0' 
		 AND ext.pabxLocation = 'YARD 2' 
		 ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function eiQaqcDepartments_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '19' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function meetingRooms_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '23' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function firstAids_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '24' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}	

	public function securities_sukajadi()
		{
			$sql = "SELECT
			tblmas_employee.employeename,
			ext.extension,
			tblfile_department.deptdesc,
			 tblfile_position.positiondesc 
			 FROM tblmas_employee 
			 LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			 LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			 LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition 
			 WHERE tblmas_employee.iddept = '25' 
			 AND tblmas_employee.stsactive = '1'  
			 AND tblmas_employee.extId != '0' 
			 AND ext.pabxLocation = 'YARD 2' 
			 ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function topManagements_sukajadi_desc(){
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.iddept = '18' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

		public function str_engineering_sukajadi_desc()
	{
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.iddept = '1' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function financeDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '2' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hrDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '3' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hseDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '4' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function misDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '5' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function poDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '6' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function yardDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '12' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function structuralQaqcDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '7' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function scmDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '9' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function teDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '15' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function eiEngineering_sukajadi_desc()
	{
		$sql = "SELECT
		ext.extension,
		tblfile_department.deptdesc 
		FROM tblmas_employee 
		LEFT JOIN ext ON tblmas_employee.extId = ext.id 
		LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
		WHERE tblmas_employee.iddept = '16' 
		AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function eiQaqcDepartments_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '19' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function meetingRooms_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '23' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function firstAids_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '24' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}	

	public function securities_sukajadi_desc()
		{
			$sql = "SELECT
			ext.extension,
			tblfile_department.deptdesc 
			FROM tblmas_employee 
			LEFT JOIN ext ON tblmas_employee.extId = ext.id 
			LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept 
			WHERE tblmas_employee.iddept = '25' 
			AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}
	// end of Sukajadi Wasco
}
