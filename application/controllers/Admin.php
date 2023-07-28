<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct(){

		parent::__construct();
		
		$this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->model('My_Model', '',TRUE);
	    	$this->load->library(array('form_validation','session'));
		$this->load->helper(array('form','url'));

	    if ($this->session->userdata('level')!="Admin") {
			redirect('LoginP/index');
		 }
	}
	 public function index(){
	$data['count_petugas'] = $this->My_Model->get_count_petugas();
	$data['count_masyarakat'] = $this->My_Model->get_count_masyarakat();
    $data['count_proses'] = $this->My_Model->get_count_proses();
    $data['count_selesai'] = $this->My_Model->get_count_selesai();
    $this->load->view('Admin/homeadmin', $data);
  }
	
	  public function dpengaduan(){
		$this->db->order_by('status','asc');
		$this->db->order_by('id_pengaduan','desc');
		$data = $this->My_Model->GetTables("masyarakat");
		$this->load->view("Admin/dpengaduan",array('data' => $data ));
	}
    public function report(){
		// $data = $this->My_Model->GetTables("basmallah");
		$this->load->view("Admin/reporti");
	} 
	public function hasil(){
		// $data = $this->My_Model->GetTables("basmallah");
		$this->load->view("Admin/hasilnya");
	}
	public function tanggal(){
		// $data = $this->My_Model->GetTables("basmallah");
		$this->load->view("Admin/tanggal");
	}
	public function dmasyarakat(){
		$data = $this->My_Model->GetTables("tb_masyarakat");
		$this->load->view("Admin/dmasyarakat",array('data' => $data ));
	}
	public function dtanggapan(){
		$data = $this->My_Model->GetTables("basmallah");
		$this->load->view("Admin/dtanggapan",array('data' => $data ));
	}
	public function dpetugas(){
		$data = $this->My_Model->GetTables("tb_petugas");
		$this->load->view("Admin/dpetugas",array('data' => $data ));
	}
   public function cari_pengaduan()
    {
    // $startdate  = $this->input->get('start_date');
    $post = $this->input->post(null, TRUE);
		if(isset($post['search'])){
			$this->load->model('My_Model');
			$query = $this->My_Model->cari_pengaduan($post);
			if($query->num_rows() > 0){

        
      $data['row']= $query;
      $this->load->view('Admin/report', $data);

  //  $data = $this->My_Model->GetTables("basmallah");
  //	$this->load->view("Admin/report",array('data' => $data ));
			}else{
					echo "<script>
							alert('Tidak ada data');
							window.location='".site_url('Admin/report')."';
						</script>";
			}
		}
    }
  public function cari_hasil()
    {
    // $startdate  = $this->input->get('start_date');
    $post = $this->input->post(null, TRUE);
		if(isset($post['search'])){
			$this->load->model('My_Model');
			$query = $this->My_Model->cari_hasil($post);
			if($query->num_rows() > 0){

        
      $data['row']= $query;
      $this->load->view('Admin/hasil', $data);

  //  $data = $this->My_Model->GetTables("basmallah");
  //	$this->load->view("Admin/report",array('data' => $data ));
			}else{
					echo "<script>
							alert('Tidak ada data');
							window.location='".site_url('Admin/hasil')."';
						</script>";
			}
		}
    }
 public function rp(){
    	$this->load->view('Admin/rp');
    }
	public function register(){

		$this->form_validation->set_rules('nama_petugas', 'Nama_petugas', 'required|min_length[4]|max_length[12]',
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
	    	  'max_length' => 'terlalu panjang'
	    ));
		$this->form_validation->set_rules('password2', 'Password2', 'trim|required|matches[password]',
	    array('required' => 'harus diisi!',
	    	  'matches' => 'password tidak sama'
	    ));
		$this->form_validation->set_rules('telp', 'Telp', 'required',
	    array('required' => 'harus diisi!',
	    	  'min_length' => 'terlalu pendek',
	    	  'max_length' => 'terlalu panjang'
	    ));
	    $this->form_validation->set_rules('level', 'Level');


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Admin/rp');
		}else{
			//ecrypt
			$enc_password = md5($this->input->post('password'));
			$this->My_Model->registerp($enc_password);
			//message
			$this->session->set_flashdata('user_registered' ,'you are now registered and can log in');
			 echo "<script>
				   alert('berhasil membuat akun');";
				   echo "window.location='".site_url('Admin/dpetugas')."';</script>";
		}
	}
	
 public function username_check(){
 	$post = $this->input->post(null, TRUE);
 	$query = $this->db->query("SELECT * FROM tb_petugas WHERE username = '$post[username]' AND id_petugas != '$post[id_petugas]'");
    if ($query->num_rows() > 0) {
    	$this->form_validation->set_message('username_check','{field} ini sudah digunakan,silahkan ganti lagi');
 		return FALSE;
 	}else{
 		return TRUE;
 	}
 }
 public function DoDelete($id_petugas)
 {
	 // Lakukan proses penghapusan data sesuai dengan ID yang diterima
	 $this->My_Model->deleteDatap($id_petugas);
	 
	 // Redirect ke halaman atau tampilkan pesan sukses
	 redirect('admin/dprtugas');
 }

}
