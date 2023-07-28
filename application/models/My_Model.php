<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Model extends CI_Model {

	public function check_user($username,$password){
		$this->db->select('*');
		$this->db->from('tb_petugas');
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get();
		return $query;

	}
  public function registerp($enc_password){
    $data = array(
      'nama_petugas' => $this->input->post('nama_petugas'),
      'username' => $this->input->post('username'),
      'password' => $enc_password,
      'telp' => $this->input->post('telp'),
      'level' => $this->input->post('level')
    );
    return $this->db->insert('tb_petugas',$data);
  }

	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);

	}  
	public function gets($id = null){
        $this->db->from('tb_pengaduan');
		$this->db->join('tb_masyarakat','tb_masyarakat.nik = tb_pengaduan.nik');

    	if ($id != null) {
    		$this->db->where('tb_pengaduan.id_pengaduan', $id);
    	}
    	$this->db->order_by('tgl_pengaduan','DESC');
    	$query = $this->db->get();
    	return $query;
    
    }
	 
	public function GetTables($table){
		$data = $this->db->get($table)->result_array();
	 	return $data;
     } 
  public function get($id){
     	$params = array('id_pengaduan'=>$id);
     	return $this->db->get_where('tb_pengaduan',$params);
     }
	   
	public function insertData($table, $data)
	{
		return $this->db->insert($table, $data);
	}
       public function CreateData($table,$data){
		$data=$this->db->insert($table,$data);
		return $data;
	}
	public function DetailData($id){
		$this->db->where('id',$id);
		$sql=$this->db->get($this->tabel);
		if($sql->num_rows()==1){
			return $sql->row_array();
		}	
		
	}

    public function GetTable($id = null){
		
        $this->db->from('tb_pengaduan');
        $this->db->join('tb_masyarakat', 'tb_masyarakat.nik = tb_pengaduan.nik');
        $this->db->join('tb_tanggapan', 'tb_pengaduan.id_pengaduan = tb_tanggapan.id_pengaduan');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_tanggapan.id_petugas');
        
        if($id != null){
            $this->db->where('tb_pengaduan.id_pengaduan', $id);
        }
        $this->db->order_by('tgl_pengaduan', 'DESC');       
        $query = $this->db->get();
        return $query;
	    } 
	public function GetWhere($table,$where){
		$data=$this->db->get_where($table,$where)->result_array();
		return $data;
	}
	public function DeleteData($table,$where){
		$data=$this->db->delete($table,$where);
		return $data;
	}
  public function deleteDatap($id_petugas)
  {
      $this->db->where('id_petugas', $id_petugas);
      $this->db->delete('tb_petugas');
  }

	public function add_laporan($post){
		
		$params['nik'] =  $post['nik'];
		$params['judul'] =  $post['judul'];
		$params['isi_laporan'] =  $post['isi_laporan'];
		$params['tgl_pengaduan'] = date("Y-m-d");;
		$params['status'] = 'menunggu' ;
		$params['foto'] =  $post['image'];
		
	    $this->db->insert('tb_pengaduan', $params);
   }
   public function add_tanggapan($post,$id){

	  $params['id_pengaduan'] = $post['id_pengaduan'];
      $params['tgl_tanggapan'] = date("Y-m-d");
      $params['tanggapan'] = $post['tanggapan'];
      $params['id_petugas'] = $this->session->userdata('id_petugas');
      $paramss['status'] = 'selesai';

      $this->db->where('id_pengaduan', $post['id_pengaduan']);
      $this->db->update('tb_pengaduan', $paramss);
  
      $this->db->insert('tb_tanggapan', $params);
   }
	public function update_status($post, $id)
  {
    $params['id_pengaduan'] = $post['id_pengaduan'];
    $params['status'] = 'proses';

    $this->db->where('id_pengaduan', $post['id_pengaduan']);
    $this->db->update('tb_pengaduan', $params);
  }

	public function UpdateData($id,$data,$where){
		$data=$this->db->update($id,$data,$where);
		return $data;
   }
      public function get_count_masyarakat(){
      	$query = "SELECT count(nik) as nik from tb_masyarakat";
      	$result = $this->db->query($query);
      	return $result->row()->nik;
      }
       public function get_count_petugas(){
      	$query = "SELECT count(id_petugas) as id_petugas from tb_petugas";
      	$result = $this->db->query($query);
      	return $result->row()->id_petugas;
      }
		public function tanggapi($table,$data,$where){
		$data=$this->db->get_where($table,$data,$where);
		return $data;
	}
	public function edit_profile($nik, $nama, $alamat, $telp, $username){
    $updateData = array(
       'nama' => $nama,
       'alamat' => $alamat,
       'telp' => $telp,
       'username' => $username
    );
    $this->db->where('nik', $nik);
    $this->db->update('tb_masyarakat', $updateData);
}
  public function edit_profiles($id_petugas,$nama_petugas,$telp){
    $updateData = array(
           'nama_petugas' =>$nama_petugas,
           'telp' =>$telp
    );
    $this->db->where('id_petugas',$id_petugas);
    $this->db->update('tb_petugas',$updateData);
  }
	public function edit_status($id,$status){
		$updateData = array(
           'status' => 'selesai'
		);

		$this->db->where('id_pengaduan',$id);
		$this->db->update('tb_pengaduan',$updateData);
	}
	public function get_count_waiting()
    {
      $query ="SELECT count(id_pengaduan) as id FROM tb_pengaduan WHERE status='menunggu'";
      $result = $this->db->query($query);
      return $result->row()->id;
    }
    public function get_count_proses()
    {
      $query ="SELECT count(id_pengaduan) as id FROM tb_pengaduan WHERE status='proses'";
      $result = $this->db->query($query);
      return $result->row()->id; 
    }
    public function get_count_selesai()
    {
      $query ="SELECT count(id_pengaduan) as id FROM tb_pengaduan WHERE status='selesai'";
      $result = $this->db->query($query);
      return $result->row()->id;
    }
    public function cari_pengaduan($post){
      $this->db->join('tb_masyarakat','tb_masyarakat.nik = tb_pengaduan.nik');
      $this->db->where('tb_pengaduan.tgl_pengaduan >=', $post['start_date']);
      $this->db->where('tb_pengaduan.tgl_pengaduan <=', $post['end_date']);
      return $this->db->get('tb_pengaduan');
    }
    public function cari_hasil($post){
      $this->db->join('tb_masyarakat','tb_masyarakat.nik = tb_pengaduan.nik'); 
      $this->db->join('tb_tanggapan', 'tb_pengaduan.id_pengaduan = tb_tanggapan.id_pengaduan');
      $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_tanggapan.id_petugas');
      $this->db->where('tb_pengaduan.tgl_pengaduan >=', $post['start_date']);
      $this->db->where('tb_pengaduan.tgl_pengaduan <=', $post['end_date']);
      return $this->db->get('tb_pengaduan');
    }
}

	
	