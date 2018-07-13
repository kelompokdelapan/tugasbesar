<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar extends CI_Model {
	public function semuaKamar() {
		$query = $this->db->get('tb_kamar');

		return $query->result_array();
	}

	public function detilKamar($id) {
		$query = $this->db->where(array('id_kamar' => $id));
		$query = $this->db->get('tb_kamar');

		return $query->result_array();
	}

	public function tambahKamar($data) {
		$this->db->insert('tb_kamar', $data);
	}

	public function perbaruiKamar($data, $where) {
		$this->db->update('tb_kamar', $data, $where);
	}

	public function hapusKamar($where) {
		$this->db->delete('tb_kamar', $where);
	}
}

/* End of file M_kamar.php */
/* Location: ./application/models/M_kamar.php */