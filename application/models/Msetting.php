<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class msetting extends CI_Model {

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

	public function getAddress(){
    return $this->db->get('address')->row();
	}

	public function saveAddress($request) {
		$store['company'] = ucwords($request['company']);
		$store['road'] = ucwords($request['road']);
		$store['phone'] = $request['phone'];
		$store['fax'] = $request['fax'];

		$this->db->insert('address', $store);

		if($this->db->affected_rows() >= 1) {
			return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

	public function updateAddress($request, $id) {
		$store['company'] = ucwords($request['company']);
		$store['road'] = ucwords($request['road']);
		$store['phone'] = $request['phone'];
		$store['fax'] = $request['fax'];

		$this->db->where('id', $id);
		$this->db->update('address', $store);

		if($this->db->affected_rows()) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}	