<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	public function semuaKamar() {
		$query = $this->db->get('tb_kamar');

		return $query->result_array();
	}
}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */