<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tamu extends CI_Model {
	public function semuaTamu() {
		$query = $this->db->get('tb_tamu');

		return $query->result_array();
	}

	public function detilTamu($id) {
		$query = $this->db->where(array('id_tamu' => $id));
		$query = $this->db->get('tb_tamu');

		return $query->result_array();
	}

	public function tambahTamu($data) {
		$this->db->insert('tb_tamu', $data);
	}

	public function perbaruiTamu($data, $where) {
		$this->db->update('tb_tamu', $data, $where);
	}

	public function hapusTamu($where) {
		$this->db->delete('tb_tamu', $where);
	}
}

/* End of file M_kamar.php */
/* Location: ./application/models/M_kamar.php */