<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class user extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    public $tb = 'user';

    public function login($username,$password){
    	$this->db->select('id_user,username,password,level');
    	$this->db->from('user');
    	$this->db->where('username', $username);
    	$this->db->where('password', MD5($password));
        $this->db->where('level', $username);
    	$query = $this->db->get();
    	if($query->num_rows()==1){
    		return $query->result();
    	}else{
    		return false;
    	}
    }   
  
     public function cekL($param)
    {
        $query = $this->db->get_where($this->tb,$param);
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function insert() {
        $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level' => 'user',
                'level' => 'admin',
            );
        $this->db->insert('user', $data);
    }
}
        
?>