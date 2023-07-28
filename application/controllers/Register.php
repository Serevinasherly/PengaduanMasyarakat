<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct(){

	parent::__construct();
	$this->load->library(array('form_validation','session'));
	$this->load->model('ModelM');
	$this->load->helper(array('form','url'));
	
}
    public function rm(){
    	$this->load->view('Masyarakat/rm');
    }
	public function register(){
		$this->form_validation->set_rules('nik', 'Nik','callback_nik_check','trim|required|min_length[4]|max_length[30]',
	    array('required' => 'harus diisi!'
	    ));

		$this->form_validation->set_rules('nama', 'Nama', 'required|min_length[4]|max_length[12]',
	    array('required' => 'harus diisi!',
	    	  'min_length' => 'terlalu pendek',
	    	  'max_length' => 'terlalu panjang'

	    ));
		$this->form_validation->set_rules('username', 'Username','callback_username_check', 'trim|required|min_length[4]|max_length[30]',
	    array('required' => 'harus diisi!'
	    ));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[30]',
	    array('required' => 'harus diisi!',
	    	  'min_length' => 'terlalu pendek',
	    	  'max_length' => 'terlalu panjang',
	    ));
		$this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password]',
	    array('required' => 'harus diisi!',
	    	  'min_length' => 'terlalu pendek',
	    	  'max_length' => 'terlalu panjang',
	    	  'matches' => 'password tidak sama'
	    ));
		$this->form_validation->set_rules('telp', 'Telp', 'required',
	    array('required' => 'harus diisi!',
	    	  'min_length' => 'terlalu pendek',
	    	  'max_length' => 'terlalu panjang'
	    ));

		$this->form_validation->set_rules('alamat', 'Alamat', 'required',
	    array('required' => 'harus diisi!',
	    	  'min_length' => 'terlalu pendek',
	    	  'max_length' => 'terlalu panjang'
	    ));

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Masyarakat/rm');
		}else{
			//ecrypt
			$enc_password = md5($this->input->post('password'));
			$this->ModelM->register($enc_password);
			//message
			$this->session->set_flashdata('user_registered' ,'you are now registered and can log in');
			 echo "<script>
				   alert('berhasil membuat akun');";
				   echo "window.location='".site_url('Masyarakat/lm')."';</script>";
		}
	}
 public function username_check(){
 	$post = $this->input->post(null, TRUE);
 	$query = $this->db->query("SELECT * FROM tb_masyarakat WHERE username = '$post[username]' AND nik != '$post[nik]'");
    if ($query->num_rows() > 0) {
    	$this->form_validation->set_message('username_check','{field} ini sudah digunakan,silahkan ganti lagi');
 		return FALSE;
 	}else{
 		return TRUE;
 	}
 }
 public function nik_check(){
 	$post = $this->input->post(null, TRUE);
 	$query = $this->db->query("SELECT * FROM tb_masyarakat WHERE nik = '$post[nik]'");
    if ($query->num_rows() > 0) {
    	$this->form_validation->set_message('nik_check','{field} ini sudah digunakan,silahkan ganti lagi');
 		return FALSE;
 	}else{
 		return TRUE;
 	}
 }
}
