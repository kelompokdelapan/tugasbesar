<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_kamar');
	}

	public function index()
	{
		$data['semua_kamar'] = $this->m_kamar->semuaKamar();
		$this->load->view('kamar/index', $data);
	}

	public function hapus($id) {
		$data['kamar'] = $this->m_kamar->detilKamar($id);
		$this->load->view('kamar/hapus', $data);
	}

	public function proses_hapus() {
		$this->m_kamar->hapusKamar(array('id_kamar' => $this->input->post('input_idKamar')));

		$data['semua_kamar'] = $this->m_kamar->semuaKamar();
		$this->load->view('kamar/index', $data);	
	}

	public function perbarui($id) {
		$data['kamar'] = $this->m_kamar->detilKamar($id);
		$this->load->view('kamar/perbarui', $data);
	}

	public function proses_perbarui() {
		$this->form_validation->set_rules('input_namaKamar', 'nama kamar', 'required');
		$this->form_validation->set_rules('input_jenisKamar', 'jenis kamar', 'required');
		$this->form_validation->set_rules('input_hargaSewa', 'harga sewa', 'required');
		$this->form_validation->set_rules('input_fasilitas', 'fasilitas', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['kamar'] = $this->m_kamar->detilKamar($this->input->post('input_idKamar'));
			$this->load->view('kamar/perbarui', $data);
		} else {
			if(empty($_FILES['input_gambarKamar']['name'])) {
				$data = array(
					'nama_kamar' => $this->input->post('input_namaKamar'),
					'jenis_kamar' => $this->input->post('input_jenisKamar'),
					'harga_sewa' => $this->input->post('input_hargaSewa'),
					'fasilitas' => $this->input->post('input_fasilitas')
				);

				$this->m_kamar->perbaruiKamar($data, array('id_kamar' => $this->input->post('input_idKamar')));

				$data['semua_kamar'] = $this->m_kamar->semuaKamar();
				$this->load->view('kamar/index', $data);				
			} else {
				$config['upload_path']   = './assets/frontend/img/portfolio/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = 5000;
		 
				$this->load->library('upload', $config);
		 
				if ( !$this->upload->do_upload('input_gambarKamar')){
					$error = $this->upload->display_errors();

					var_dump($error);
				}else{
					$image = $this->upload->data();

					$data = array(
						'nama_kamar' => $this->input->post('input_namaKamar'),
						'jenis_kamar' => $this->input->post('input_jenisKamar'),
						'harga_sewa' => $this->input->post('input_hargaSewa'),
						'fasilitas' => $this->input->post('input_fasilitas'),
						'gambar_kamar' => $image['file_name']
					);

					$this->m_kamar->perbaruiKamar($data, array('id_kamar' => $this->input->post('input_idKamar')));

					$data['semua_kamar'] = $this->m_kamar->semuaKamar();
					$this->load->view('kamar/index', $data);
				}	
			}
		}
	}

	public function tambah() {
		$this->load->view('kamar/tambah');
	}

	public function proses_tambah() {
		$this->form_validation->set_rules('input_namaKamar', 'nama kamar', 'required');
		$this->form_validation->set_rules('input_jenisKamar', 'jenis kamar', 'required');
		$this->form_validation->set_rules('input_hargaSewa', 'harga sewa', 'required');
		$this->form_validation->set_rules('input_fasilitas', 'fasilitas', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('kamar/tambah');
		} else {
			$config['upload_path']   = './assets/frontend/img/portfolio/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = 5000;
	 
			$this->load->library('upload', $config);
	 
			if ( !$this->upload->do_upload('input_gambarKamar')){
				$error = $this->upload->display_errors();

				var_dump($error);
			}else{
				$image = $this->upload->data();

				$data = array(
					'id_kamar' => '',
					'nama_kamar' => $this->input->post('input_namaKamar'),
					'jenis_kamar' => $this->input->post('input_jenisKamar'),
					'harga_sewa' => $this->input->post('input_hargaSewa'),
					'fasilitas' => $this->input->post('input_fasilitas'),
					'gambar_kamar' => $image['file_name']
				);

				$this->m_kamar->tambahKamar($data);

				$data['semua_kamar'] = $this->m_kamar->semuaKamar();
				$this->load->view('kamar/index', $data);
			}
		}
	}
}

/* End of file Kamar.php */
/* Location: ./application/controllers/Kamar.php */