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

	public function index($department, $officeLocationId = NULL, $groupId = NULL){
		if ($officeLocationId == NULL){
			$officeLocationId = 1;
		}

		

		// var_dump($officeLocationId);
		foreach ($department as $value) {
				$iddept = $value->iddept;
				$where = " WHERE te.iddept = $iddept 
								AND te.stsactive = '1' 
								AND ol.office_location_id = '$officeLocationId'";
				if ($groupId){
					$where .=  " AND td.group_id = '$groupId'";
				}
				$sql = "SELECT 
						te.employeename,
						te.ext,
						te.extId,
						te.code,
						ext.extension,
						td.deptdesc,
						tp.positiondesc 
					FROM tblmas_employee te 
					LEFT JOIN tblfile_department td ON te.iddept = td.iddept 
					LEFT JOIN tblfile_position tp ON te.idposition = tp.idposition
					LEFT JOIN office_location ol ON te.office_location_id = ol.office_location_id 
					LEFT JOIN ext ON te.extId = ext.id 
					$where
					ORDER BY tp.level ASC";
				$query = $this->db->query($sql);
				if ($query->result_array()) {
					$results[$value->deptdesc] = $query->result_array();
				}
			}
				return $results;
		// 	var_dump($query->result());die;
		// 	if ($query) {
			
		// } else {
		// 	return FALSE;
		// }
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
	
	
}
