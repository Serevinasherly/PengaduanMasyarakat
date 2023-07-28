<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelM extends CI_Model {
	public function register($enc_password){
		$data = array(
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $enc_password,
			'telp' => $this->input->post('telp'),
			'alamat' => $this->input->post('alamat')
		);
		return $this->db->insert('tb_masyarakat',$data);
	}
	   public function GetTable($id = null){
		
        $this->db->from('tb_pengaduan');
        $this->db->join('tb_masyarakat', 'tb_masyarakat.nik = tb_pengaduan.nik');
        
        if($id != null){
            $this->db->where('tb_pengaduan.id_pengaduan', $id);
              $this->db->where('tb_masyarakat.id_masyarakat', $id);
        }
        $this->db->order_by('tgl_pengaduan', 'DESC');       
        $query = $this->db->get();
        return $query;
	    } 
	public function GetWhere($table,$where){
		$data=$this->db->get_where($table,$where)->result_array();
		return $data;
	}

	    public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
		
	}
	 public function get($id_tanggapan = null){
        $this->db->from('tb_tanggapan');
        $this->db->join('tb_pengaduan', 'tb_pengaduan.id_pengaduan = tb_tanggapan.id_pengaduan');
        $this->db->join('tb_masyarakat', 'tb_pengaduan.nik = tb_masyarakat.nik');
        $this->db->join('tb_petugas', 'tb_tanggapan.id_petugas = tb_petugas.id_petugas');
        if($id_tanggapan != null){
            $this->db->where('id_tanggapan', $id_tanggapan);
        }
        $this->db->order_by('tgl_tanggapan', 'DESC');       
        $query = $this->db->get();
        return $query;
    
    }
    public function get_count_waiting($nik)
    {
      $this->db->where('nik',$nik);
      $query ="SELECT count(id_pengaduan) as id FROM tb_pengaduan WHERE nik=$nik ";
      $result = $this->db->query($query);
      return $result->row()->id;
    }
    public function get_count_proses($nik)
    {
      $query ="SELECT count(id_pengaduan) as id FROM tb_pengaduan WHERE status='proses' And nik=$nik";
      $result = $this->db->query($query);
      return $result->row()->id;
    }
    public function get_count_selesai($nik)
    {
      $query ="SELECT count(id_pengaduan) as id FROM tb_pengaduan WHERE status='selesai' And nik=$nik";
      $result = $this->db->query($query);
      return $result->row()->id;
    }
	 
	   
	
    public function CreateData($table,$data){
		$data=$this->db->insert($table,$data);
		return $data;
	}
	public function DeleteData($table,$where){
		$data=$this->db->delete($table,$where);
		return $data;
	}
	public function DetailData($table,$data,$where){
		$data=$this->db->Upadate($table,$data,$where);
		return $data;
	}
		public function edit_profile($nik,$nama,$alamat,$telp){
		$this->db->set('nama',$nama);
		$this->db->set('alamat',$alamat);
		$this->db->set('telp',$telp);
		$this->db->where('nik',$nik);
		$result = $this->db->affected_rows();
		return $result;
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


	
	