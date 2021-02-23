<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mextensions extends CI_Model {

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
	// Yard 1 Wasco
	public function topManagements(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '18' AND tblmas_employee.stsactive = '1' AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function strEngineering()
	{
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '1' AND tblmas_employee.stsactive = '1' AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function financeDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '2' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hrDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '3' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hseDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '4' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function misDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '5' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function poDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '6' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function yardDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '12' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function structuralQaqcDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '7' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function scmDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '9' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function teDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '15' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function eiEngineering()
	{
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '16' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function eiQaqcDepartments()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '19' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function meetingRooms()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '23' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function firstAids()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '24' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}	

	public function securities()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '25' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function topManagements_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '18' AND tblmas_employee.stsactive = '1' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function strEngineering_desc()
	{
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '1' AND tblmas_employee.stsactive = '1'  AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function financeDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '2' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hrDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '3' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hseDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '4' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function misDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '5' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function poDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '6' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function yardDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '12' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function structuralQaqcDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '7' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function scmDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '9' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function teDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '15' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function eiEngineering_desc()
	{
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '16' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function eiQaqcDepartments_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '19' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function meetingRooms_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '23' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function firstAids_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '24' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}	

	public function securities_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '25' AND tblmas_employee.stsactive = '1'   AND ext.pabxLocation = 'YARD 1'";
			$query = $this->db->query($sql);
			return $query->row();
		}				
	// end of Yard 1 Wasco

	// Yard 1 Client 
	public function clients1(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c2'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients3(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c3'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients4(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c4'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients5(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c5'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients6(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c6'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 1' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients1_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c1' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c2' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients3_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c3' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients4_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c4' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients5_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c5' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients6_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c6' AND ext.pabxLocation = 'YARD 1'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	// end of Yard 1 Client

	// Yard 2 Wasco
	public function topManagements_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '18' AND tblmas_employee.stsactive = '1' AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function str_engineering_yard2()
	{
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '1' AND tblmas_employee.stsactive = '1' AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function financeDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '2' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hrDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '3' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function hseDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '4' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function misDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '5' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function poDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '6' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function yardDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '12' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function structuralQaqcDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '7' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function scmDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '9' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function teDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '15' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function eiEngineering_yard2()
	{
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '16' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function eiQaqcDepartments_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '19' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function meetingRooms_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '23' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

	public function firstAids_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '24' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}	

	public function securities_yard2()
		{
			$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.iddept = '25' AND tblmas_employee.stsactive = '1'  AND tblmas_employee.extId != '0' AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
			$query = $this->db->query($sql);
			return $query->result();
		}

		public function topManagements_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '18' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

		public function str_engineering_yard2_desc()
	{
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '1' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function financeDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '2' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hrDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '3' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function hseDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '4' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function misDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '5' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function poDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '6' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function yardDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '12' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function structuralQaqcDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '7' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function scmDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '9' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

		public function teDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '15' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function eiEngineering_yard2_desc()
	{
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '16' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function eiQaqcDepartments_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '19' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function meetingRooms_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '23' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}

	public function firstAids_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '24' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}	

	public function securities_yard2_desc()
		{
			$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.iddept = '25' AND ext.pabxLocation = 'YARD 2'";
			$query = $this->db->query($sql);
			return $query->row();
		}
	// end of Yard 2 Wasco

	// Yard 2 Client 
		public function clients1_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c1'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients2_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c2'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients3_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c3'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients4_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c4'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients5_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c5'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients6_yard2(){
		$sql = "SELECT tblmas_employee.employeename, ext.extension, tblfile_department.deptdesc, tblfile_position.positiondesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept LEFT JOIN tblfile_position ON tblmas_employee.idposition = tblfile_position.idposition WHERE tblmas_employee.code = 'c6'  AND tblmas_employee.extId != '0'  AND ext.pabxLocation = 'YARD 2' ORDER BY tblfile_position.level ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function clients1_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c1' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients2_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c2' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients3_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c3' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients4_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c4' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients5_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c5' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}

	public function clients6_yard2_desc(){
		$sql = "SELECT ext.extension, tblfile_department.deptdesc FROM tblmas_employee LEFT JOIN ext ON tblmas_employee.extId = ext.id LEFT JOIN tblfile_department ON tblmas_employee.iddept = tblfile_department.iddept WHERE tblmas_employee.code = 'c6' AND ext.pabxLocation = 'YARD 2'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	// end of Yard 2 Client
}
