<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_tamu');
	}

	public function index()
	{
		$data['semua_tamu'] = $this->m_tamu->semuaTamu();
		$this->load->view('tamu/index', $data);
	}

	public function hapus($id) {
		$data['tamu'] = $this->m_tamu->detilTamu($id);
		$this->load->view('tamu/hapus', $data);
	}

	public function proses_hapus() {
		$this->m_tamu->hapusTamu(array('id_tamu' => $this->input->post('input_idTamu')));

		$data['semua_tamu'] = $this->m_tamu->semuaTamu();
		$this->load->view('tamu/index', $data);	
	}

	public function perbarui($id) {
		$data['tamu'] = $this->m_tamu->detilTamu($id);
		$this->load->view('tamu/perbarui', $data);
	}

	public function proses_perbarui($id) {
		$this->form_validation->set_rules('input_namaTamu', 'nama tamu', 'required');
		$this->form_validation->set_rules('input_jenisKelamin', 'jenis kelamin', 'required');
		$this->form_validation->set_rules('input_wargaNegara', 'warganegara', 'required');
		$this->form_validation->set_rules('input_alamat', 'alamat', 'required');
		$this->form_validation->set_rules('input_telepon', 'telepon', 'required');
		
		if ($this->form_validation->run() == FALSE) {
			$data['tamu'] = $this->m_tamu->detilTamu($id);
			$this->load->view('tamu/perbarui', $data);
		} else {
			if(empty($_FILES['input_gambarKamar']['name'])) {
				$data = array(
					'nama_tamu' => $this->input->post('input_namaTamu'),
					'jenis_kelamin' => $this->input->post('input_jenisKelamin'),
					'warganegara' => $this->input->post('input_wargaNegara'),
					'alamat' => $this->input->post('input_alamat'),
					'telepon' => $this->input->post('input_telepon')
				);

				$this->m_tamu->perbaruiTamu($data, array('id_tamu' => $this->input->post('input_idTamu')));

				$data['semua_tamu'] = $this->m_tamu->semuaTamu();
				$this->load->view('tamu/index', $data);				
			} else {
				$config['upload_path']   = './assets/frontend/img/portfolio/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = 5000;
		 
				$this->load->library('upload', $config);
		 
					$image = $this->upload->data();

					$data = array(
						'nama_tamu' => $this->input->post('input_namaTamu'),
						'jenis_kelamin' => $this->input->post('input_jenisKelamin'),
						'warganegara' => $this->input->post('input_wargaNegara'),
						'alamat' => $this->input->post('input_alamat'),
						'telepon' => $image['input_telepon']
					);

					$this->m_tamu->perbaruiTamu($data, array('id_tamu' => $this->input->post('input_idTamu')));

					$data['semua_tamu'] = $this->m_tamu->semuaTamu();
					$this->load->view('tamu/index', $data);	
			}
		}
	}

	public function tambah() {
		$this->load->view('tamu/tambah');
	}

	public function proses_tambah() {
		$this->form_validation->set_rules('input_namaTamu', 'nama tamu', 'required');
		$this->form_validation->set_rules('input_jenisKelamin', 'jenis kelamin', 'required');
		$this->form_validation->set_rules('input_warganegara', 'warganegara', 'required');
		$this->form_validation->set_rules('input_alamat', 'alamat', 'required');
		$this->form_validation->set_rules('input_telepon', 'telepon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('tamu/tambah');
		} else {
			$config['upload_path']   = './assets/frontend/img/portfolio/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']      = 5000;
	 
			$this->load->library('upload', $config);
	 
				$image = $this->upload->data();

				$data = array(
					'id_tamu' => '',
					'nama_tamu' => $this->input->post('input_namaTamu'),
					'jenis_kelamin' => $this->input->post('input_jenisKelamin'),
					'warganegara' => $this->input->post('input_warganegara'),
					'alamat' => $this->input->post('input_alamat'),
					'telepon' => $this->input->post('input_telepon'),
				);

				$this->m_tamu->tambahTamu($data);

				$data['semua_tamu'] = $this->m_tamu->semuaTamu();
				$this->load->view('tamu/index', $data);
		}
	}
}

/* End of file Kamar.php */
/* Location: ./application/controllers/Kamar.php */