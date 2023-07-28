<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginP extends CI_Controller {

    public function __construct(){
    	parent:: __construct();
    	$this->load->model('My_Model');

    }

	public function index()
	{
		$this->load->view('Petugas/lp');
	}
	public function Auth(){
		$username = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$result = $this->My_Model->check_user($username,$password); 
		if ($result->num_rows() > 0) {
				$data = $result->row_array();
				$name = $data['username'];
				$level = $data['level'];
        $getID = $result->row_array();
				$sesdata = array(
					'username' => $username,
				    'level' => $level,
            'id_petugas' => $getID['id_petugas'],
				    'logged_in' => TRUE);
              $this->session->set_userdata($sesdata);
              if ($level == 'Admin') {
              	redirect('Admin');
              }else if ($level == 'Petugas'){
              		redirect('Petugas');

              }
          }else{
          	 echo "<script>
           alert('Username atau password salah');";
           echo "window.location='".site_url('LoginP/index')."';</script>";
          }
        }
      public function logout(){
        $this->session->sess_destroy();
        redirect(site_url('LoginP/index'));
      }
      
  }
  
