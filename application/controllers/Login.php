<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('user');
       
    }

   	public function index() {
        $this->load->view('login_view');
    }

    public function cekLogin()
    {
    	$this->load->library('form_validation');
    	$this->form_validation->set_rules('username', 'Username', 'trim|required');
    	$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
    	if ($this->form_validation->run()==FALSE) {
            $this->load->view('login_view');
    	}else {
    		redirect('barang','refresh');
    	}
    }

    public function cekDb() {
        $username = $this->input->post('username');
        $input = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        $result = $this->user->cekL($input);
        if($result){
        	$sess_array = array();
        	foreach ($result as $key) {
        		$sess_array = array(
        			'id_user'=>$key->id_user,
        			'username'=>$key->username,
                    'level' => $key->level
        		);
        		$this->session->set_userdata('logged_in',$sess_array);
        		return true;
        	}
        }else{
        	$this->form_validation->set_message('cekDb',"Login Gagal");
        	return false;
        }
    }

    public function logout(){
    	$this->session->unset_userdata('logged_in');
    	$this->session->sess_destroy();
    	redirect('login','refresh');
    }

     public function create() {
    	$this->load->model('user');
    	$this->form_validation->set_rules('username','Username','trim|required');
    	$this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('cpassword','Password Confirmed','trim|required|matches[password]');

    	if ($this->form_validation->run()==FALSE) {
    		$this->load->view('input');
        }else{
                $this ->user ->insert();
                $this ->load->view('login_view');
        }
    }
}
        
?>