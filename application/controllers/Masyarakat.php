<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masyarakat extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		if ($this->session->userdata("status") != "login") {
			redirect("LoginM/index");
		}

	}
	
	public function lm()
	{
		$this->load->view('Masyarakat/lm');
	}

	public function index()
	{
		$this->load->view('Masyarakat/homemasy');
	}
	public function rm(){
		$this->load->view('Masyarakat/rm');
	}
	public function Create($table){
		$this->load->view('Masyarakat/rm');
	}
	public function homemasy(){
		$this->load->view('Masyarakat/homemasy');
	}
	public function pengaduan(){

		$this->load->view('Masyarakat/pengaduan');
	}
	 public function create_laporan(){

		$this->load->model('My_Model');
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi_laporan', 'Isi Laporan', 'required');
		//$this->form_validation->set_rules('image', 'image', 'required');
		
		$this->form_validation->set_message('required', '{field} harus diisi');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Masyarakat/homemasy');
			echo "<script>
				  alert('Gagal membuat Laporan');
				</script>";
		  } else {
			$post = $this->input->post(null, TRUE);
			$config['upload_path']          = './images';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;
			$config['file_name']            = 'pengaduan-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload', $config);
			if(@$_FILES['image']['name'] !=null){
				$this->upload->do_upload('image');
				$post['image'] = $this->upload->data('file_name');
				$this->My_Model->add_laporan($post);
				if ($this->db->affected_rows() > 0) {
				  echo "<script>
					alert('Berhasil Membuat Laporan');
				  </script>";
				   echo "<script>window.location='".site_url('masyarakat')."';</script>";; 
				}
			}
		  }
		}


	public function tanggapan(){   
		$nik = $_SESSION['nik'];
		$query = $this->db->get_where('tb_pengaduan',array('nik' => $nik));
	     if ($query->num_rows()>0) {
			$data['data'] = $query->result_array();
			$this->load->view("Masyarakat/tanggapan",$data);
			}else{
			  $data['data'] = $query->result_array();
		      $this->load->view("Masyarakat/tanggapan",$data);
			}		
     }
		
	
	public function Update($table,$id){
		$where= array('id_pengaduan' =>$id);
		$d=$this->My_Model->GetWhere("tb_pengaduan",$where);
		$this->load->view("Masyarakat/detail",array('d' =>$d['0']));
	}
		
	public function info($id){
			$this->load->model('My_Model');
    
			$query = $this->My_Model->GetTable($id);
				if($query->num_rows() > 0) {
				  $data['row'] = $query->row();
				  $this->load->view('Masyarakat/info', $data);
				  
		 
			   }else{
				 echo "<script>
				   alert('Laporan belum ditanggapi');";
				   echo "window.location='".site_url('Masyarakat/tanggapan')."';</script>";
		 
			   }
		
	}
	public function profile(){
	    $this->load->model('ModelM');
		$nik = $_SESSION['nik'];	
		$query = $this->db->get_where('tb_masyarakat',array('nik' => $nik));
	     if ($query->num_rows()>0) {
			$data['row'] = $query->row();
			$nik = $_SESSION['nik'];
	     	$data['count_waiting'] = $this->ModelM->get_count_waiting($nik);
   		    $data['count_proses'] = $this->ModelM->get_count_proses($nik);
            $data['count_selesai'] = $this->ModelM->get_count_selesai($nik);
		    $this->load->view("Masyarakat/profile",$data);
			}else{
				$data = $query->result_array();
			}		
     } 
	 public function DoUpdate($table){
	 	$nik = $_SESSION['nik'];
    	$where = array('nik'=>$_POST['nik']);
    	$data['row'] = $this->My_Model->UpdateData("tb_$table",$_POST,$where);
    	if ($data>=1) {
    		redirect("Masyarakat/profile");
    	}else{
    		echo "UPDATE ERROR";
    	}
    }
	public function editprofile() {
		$nama = $this->input->post('nama', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$telp = $this->input->post('telp', TRUE);
		$username = $this->input->post('username', TRUE);
		$nik = $this->session->userdata('nik');
	
		$this->form_validation->set_rules('username', 'Username', 'callback_username_check');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telp', 'Telepon', 'required');
	
		if ($this->form_validation->run() == FALSE) {
			redirect('Masyarakat/profile');
		} else {
			$result = $this->My_Model->edit_profile($nik, $nama, $alamat, $telp, $username);
			redirect('Masyarakat/profile');
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
}
