<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data['semua_transaksi'] = $this->m_transaksi->semuaTransaksi();
		$this->load->view('transaksi/index', $data);
	}

	public function hapus($id) {
		$data['transaksi'] = $this->m_transaksi->detilTransaksi($id);
		$this->load->view('transaksi/hapus', $data);
	}

	public function proses_hapus() {
		$this->m_transaksi->hapusTransaksi(array('id_transaksi' => $this->input->post('input_idTransaksi')));

		$data['semua_transaksi'] = $this->m_transaksi->semuaTransaksi();
		$this->load->view('transaksi/index', $data);	
	}

	public function perbarui($id) {
		$data['transaksi'] = $this->m_transaksi->detilTransaksi($id);
		$this->load->view('transaksi/perbarui', $data);
	}

	public function proses_perbarui($id) {
		$this->form_validation->set_rules('input_idtransaksi', 'id transaksi', 'required');
		$this->form_validation->set_rules('input_idtamu', 'id tamu', 'required');
		$this->form_validation->set_rules('input_idkamar', 'id kamar', 'required');
		$this->form_validation->set_rules('input_tglcekin', 'tgl cekin', 'required');
		$this->form_validation->set_rules('input_tglcekout', 'tgl cekout', 'required');
		$this->form_validation->set_rules('input_lamamenginap', 'lama menginap', 'required');
		$this->form_validation->set_rules('input_totalbiaya', 'total biaya', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['transaksi'] = $this->m_transaksi->detilTransaksi($id);
			$this->load->view('transaksi/perbarui', $data);
		} else {
			if(empty($_FILES['input_gambarTransaksi']['name'])) {
				$data = array(
					'id_transaksi' => $this->input->post('input_idtransaksi'),
					'id_tamu' => $this->input->post('input_idtamu'),
					'id_kamar' => $this->input->post('input_idkamar'),
					'tgl_cekin' => $this->input->post('input_tglcekin'),
					'tgl_cekout' => $this->input->post('input_tglcekout'),
					'lama_menginap' => $this->input->post('input_lamamenginap'),
					'total_biaya' => $this->input->post('input_totalbiaya')
				);

				$this->m_transaksi->perbaruiTransaksi($data, array('id_transaksi' => $this->input->post('input_idTransaksi')));

				$data['semua_transaksi'] = $this->m_transaksi->semuaTransaksi();
				$this->load->view('transaksi/index', $data);				
			} else {
				$config['upload_path']   = './assets/frontend/img/portfolio/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = 5000;
		 
				$this->load->library('upload', $config);
		 
					$image = $this->upload->data();

					$data = array(
					'id_transaksi' => $this->input->post('input_idtransaksi'),
					'id_tamu' => $this->input->post('input_idtamu'),
					'id_kamar' => $this->input->post('input_idkamar'),
					'tgl_cekin' => $this->input->post('input_tglcekin'),
					'tgl_cekout' => $this->input->post('input_tglcekout'),
					'lama_menginap' => $this->input->post('input_lamamenginap'),
					'total_biaya' => $this->input->post('input_totalbiaya')
					);

					$this->m_transaksi->perbaruiTransaksi($data, array('id_transaksi' => $this->input->post('input_idTransaksi')));

					$data['semua_transaksi'] = $this->m_transaksi->semuaTransaksi();
					$this->load->view('transaksi/index', $data);	
			}
		}
	}

	public function tambah() {
		$this->load->view('transaksi/tambah');
	}

	public function proses_tambah() {
		$this->form_validation->set_rules('input_idtransaksi', 'id transaksi', 'required');
		$this->form_validation->set_rules('input_idtamu', 'id tamu', 'required');
		$this->form_validation->set_rules('input_idkamar', 'id kamar', 'required');
		$this->form_validation->set_rules('input_tglcekin', 'tgl cekin', 'required');
		$this->form_validation->set_rules('input_tglcekout', 'tgl cekout', 'required');
		$this->form_validation->set_rules('input_lamamenginap', 'lama menginap', 'required');
		$this->form_validation->set_rules('input_totalbiaya', 'total biaya', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('transaksi/tambah');
		} else {
			$config['upload_path']   = './assets/frontend/img/portfolio/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = 5000;
	 
			$this->load->library('upload', $config);
	 
				$image = $this->upload->data();

				$data = array(
					'id_transaksi' =>$this->input->post('input_idtransaksi'),
					'id_tamu' => $this->input->post('input_idtamu'),
					'id_kamar' =>$this->input->post('input_idkamar'),
					'tgl_cekin' => $this->input->post('input_tglcekin'),
					'tgl_cekout' => $this->input->post('input_tglcekout'),
					'lama_menginap' => $this->input->post('input_lamamenginap'),
					'total_biaya' => $this->input->post('input_totalbiaya'),
				);

				$this->m_transaksi->tambahTransaksi($data);

				$data['semua_transaksi'] = $this->m_transaksi->semuaTransaksi();
				$this->load->view('transaksi/index', $data);
		}
	}
}

/* End of file Kamar.php */
/* Location: ./application/controllers/Kamar.php */