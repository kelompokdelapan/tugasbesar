<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {
	public function semuaTransaksi() {
		$query = $this->db->get('tb_transaksi');

		return $query->result_array();
	}

	public function detilTransaksi($id) {
		$query = $this->db->where(array('id_transaksi' => $id));
		$query = $this->db->get('tb_transaksi');

		return $query->result_array();
	}

	public function tambahTransaksi($data) {
		$this->db->insert('tb_transaksi', $data);
	}

	public function perbaruiTransaksi($data, $where) {
		$this->db->update('tb_transaksi', $data, $where);
	}

	public function hapusTransaksi($where) {
		$this->db->delete('tb_transaksi', $where);
	}
}

/* End of file M_kamar.php */
/* Location: ./application/models/M_kamar.php */