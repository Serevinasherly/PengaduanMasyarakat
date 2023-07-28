<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	
		public function __construct(){

		parent::__construct();
		
		$this->load->helper('url');
	    $this->load->helper('form');
	    $this->load->model('My_Model', '',TRUE);
	    	$this->load->library(array('form_validation','session'));
		$this->load->helper(array('form','url'));

	    if ($this->session->userdata('level')!="Petugas") {
			redirect('LoginP/index');
		 }
}
	 public function index(){
    $data['count_masyarakat'] = $this->My_Model->get_count_masyarakat();
	 	$data['count_waiting'] = $this->My_Model->get_count_waiting();
    $data['count_proses'] = $this->My_Model->get_count_proses();
    $data['count_selesai'] = $this->My_Model->get_count_selesai();
    $this->load->view('Petugas/HomePetugas', $data);
}
     public function pengaduan(){
      $this->db->order_by('status','asc');
    $this->db->order_by('id_pengaduan','desc');
     	$data = $this->My_Model->GetTables("tb_pengaduan");
		$this->load->view("Petugas/pengaduan",array('data' => $data ));
     }
 
     public function tanggapan(){   
		$id_petugas = $_SESSION['id_petugas'];
		$query = $this->db->get_where('basmallah',array('id_petugas' => $id_petugas));
	     if ($query->num_rows()>0) {
			$data['data'] = $query->result_array();
		    $this->load->view("Petugas/tanggapan",$data);
			}else{
				
			$data['data'] = $query->result_array();
		    $this->load->view("Petugas/tanggapan",$data);
			}		
     }
		
	
     public function DoCreate($table){
		$data =$this->My_Model->CreateData("tb_tanggapan",$_POST);
		if ($data>=1) {
			redirect("Petugas/selesai");
	
		}else{
			echo "INPUT GAGAL";
		}
	}
    	public function Detail($id){
      $this->load->model('My_Model');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('tanggapan', 'Tanggapan', 'required');
      if ($this->form_validation->run() == FALSE)
      {
        $query = $this->My_Model->gets($id);
        if($query->num_rows() > 0) {
          $data['row'] = $query->row();
          $this->load->view('Petugas/detail',$data);
 
       }else{
         echo "<script>
           alert('Data tidak ditemukan');";
           echo "window.location='".site_url('Petugas/pengaduan')."';</script>";
 
       }

      }else{
        $post = $this->input->post(null, TRUE);
        $this->My_Model->add_tanggapan($post, $id);
        if ($this->db->affected_rows() > 0) {
          echo "<script>
            alert('Tanggapan Berhasil dikirim');
          </script>";
        }
        
        echo "<script>window.location='".site_url('Petugas/pengaduan')."';</script>";
      }

    }

     public function Table($table)
	{
		$data = $this->My_Model->GetTable("tb_$table");
		$this->load->view("$table",array('data'=>$data));
	}
		public function DoDelete($table,$id){
		$where=array("id_$table"=>$id);
		$data=$this->My_Model->DeleteData("tb_$table",$where);
		if ($data>=1) {
			redirect("Petugas/pengaduan");
		}else{
			echo "DELETE GAGAL";
		}
	}
public function update_status($id)
    {
      $query = $this->My_Model->gets($id);
      $this->load->model('My_Model');
      
      
      $data['row_kel'] = $query->row();
      $data['row'] = $query->row();

      $post = $this->input->post(null, TRUE);
      $this->My_Model->update_status($post, $id);
      if ($this->db->affected_rows() > 0) {
        echo "<script>
          alert('Berhasil Update status');
        </script>";
        echo "<script>window.location='".site_url('Petugas/pengaduan')."';</script>";
      }else{
        echo "<script>
              alert('Gagal update status');
              </script>";
              $this->load->view('Petugas/Detail', $data);
      }
      }
  public function editstatus($id){
    $id = $this->input->post('id_pengaduan',TRUE);
    $status = $this->input->post('status',TRUE);
    $result = $this->My_Model->edit_status($id,$status);
    redirect('Petugas/pengaduan');
  }
    public function profile(){
      $this->load->model('My_Model');
    $id_petugas = $_SESSION['id_petugas'];  
    $query = $this->db->get_where('tb_petugas',array('id_petugas' => $id_petugas));
       if ($query->num_rows()>0) {
      $data['row'] = $query->row();
        $data['count_waiting'] = $this->My_Model->get_count_waiting();
          $data['count_proses'] = $this->My_Model->get_count_proses();
            $data['count_selesai'] = $this->My_Model->get_count_selesai();
        $this->load->view("Petugas/profile",$data);
      }else{
        $data = $query->result_array();
      }   
     }
      public function editprofile(){
    $nama_petugas = $this->input->post('nama_petugas',TRUE);
    $telp = $this->input->post('telp',TRUE);
    $id_petugas = $this->session->userdata('id_petugas');
    $result = $this->My_Model->edit_profiles($id_petugas,$nama_petugas,$telp);
    redirect('Petugas/profile');
  } 
}