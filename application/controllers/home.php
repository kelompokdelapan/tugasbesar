<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

    function __construct() {
        parent::__construct();
        if($this->session->userdata('logged_in')){
        	$session_data = $this->session->userdata('logged_in');
        	$data['username'] = $session_data['username'];
        	$data['level'] = $session_data['level'];
        	$current_controller = $this->router->fetch_class();
        	$this->load->library('acl');
        	if (! $this->acl->is_public($current_controller))
        	{
        		if(! $this->acl->is_allowed($current_controller,$data['level'])){
        			redirect('login/logout','refresh');
        		}
        	}
        }else{
        	redirect('login','refresh');
        }
    }

    function index() {
         $this->load->view('barang_view');
    }
}

?>