<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_home');
	}

	public function index()
	{
		$data['semua_kamar'] = $this->m_home->semuaKamar();

		$this->load->view('home/index', $data);
	}

	public function register() {
		$cek = $this->m_home->cekKetersediaan($this->input->post('id_kamar'), $this->input->post('tgl_cekin'));

		if($cek['status'] == true) {
			// Bisa dibooking
			$tamu = array(
				'id_tamu' => '',
				'nama_tamu' => $this->input->post('nama_tamu'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'warganegara' => $this->input->post('warganegara'),
				'alamat' => $this->input->post('alamat'),
				'telepon' => $this->input->post('telepon')
			);

			$id_tamu = $this->m_home->tambahTamu($tamu);
			$tgl_cekin = strtotime($this->input->post('tgl_cekin'));
			$tgl_cekout = strtotime($this->input->post('tgl_cekout'));
			$lama_menginap = round(($tgl_cekout - $tgl_cekin) / (60 * 60 * 24));
			$total_biaya = $this->m_home->hargaKamar($this->input->post('id_kamar')) * $lama_menginap;

			$transaksi = array(
				'id_transaksi' => '',
				'id_tamu' => $id_tamu, 
				'id_kamar' => $this->input->post('id_kamar'), 
				'tgl_cekin' => $this->input->post('tgl_cekin'), 
				'tgl_cekout' => $this->input->post('tgl_cekout'),
				'lama_menginap' => $lama_menginap,
				'total_biaya' => $total_biaya
			);

			$id_transaksi = $this->m_home->tambahTransaksi($transaksi);

			echo "<script>alert('Pesanan Anda berhasil dikirim. Tunggu pihak kami menghubungi Anda.');</script>";
			echo "<script>document.location.href = '../';</script>";
		} else {
			// Tidak bisa dibooking
			echo "<script>alert('Kamar ini sedang dibooking sampai tanggal " . $cek['tanggal'] . ".');</script>";
			echo "<script>document.location.href = '../';</script>";
		}
	}
}