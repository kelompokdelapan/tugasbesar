<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	public function semuaKamar() {
		$query = $this->db->get('tb_kamar');

		return $query->result_array();
	}

	public function tambahTamu($tamu) {
		$this->db->insert('tb_tamu', $tamu);

		return $this->db->insert_id();
	}

	public function cekKetersediaan($id_kamar, $tgl_cekin) {
		$query = $this->db->where('id_kamar =', $id_kamar);
		$query = $this->db->order_by('id_transaksi', 'DESC');
		$query = $this->db->limit(1);
		$query = $this->db->get('tb_transaksi');

		$parser = array();

		$count = $query->num_rows();

		if($count > 0) {
			$result = $query->result_array();

			if($result[0]['tgl_cekout'] < $tgl_cekin) {
				$parser['status'] = true;
				$parser['tanggal'] = $result[0]['tgl_cekout'];
			} else {
				$parser['status'] = false;
				$parser['tanggal'] = $result[0]['tgl_cekout'];
			}
 		} else {
			$parser['status'] = true;
			$parser['tanggal'] = $result[0]['tgl_cekout'];
		}

		return $parser;
	}

	public function hargaKamar($id_kamar) {
		$query = $this->db->where(array('id_kamar' => $id_kamar));
		$query = $this->db->get('tb_kamar');

		$result = $query->result_array();

		return $result[0]['harga_sewa'];
	}

	public function tambahTransaksi($transaksi) {
		$this->db->insert('tb_transaksi', $transaksi);

		return $this->db->insert_id();
	}
}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */