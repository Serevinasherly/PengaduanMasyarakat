				<?php
				defined('BASEPATH') OR exit('No direct script access allowed');

				class LoginM extends CI_Controller {

					public function __construct(){
						parent:: __construct();
						$this->load->model('My_Model');

					}
					public function index()
					{
						$this->load->view('Masyarakat/lm');
					}
					public function aksi_login(){
						$username = $this->input->post('username');
						$password = $this->input->post('password');

						$where = array(
							'username' => $username,
							'password' => md5($password)

						);
						$cek = $this->My_Model->cek_login("tb_masyarakat",$where);
						if ($cek->num_rows() > 0) {
							$getNik=$cek->row_array();
							$data_session = array(
								'nama' => $username,
								'nik' => $getNik['nik'],
								'status' => "login"
								
							);
							
							$this->session->set_userdata($data_session);
							$this->session->set_flashdata('user_loggedin','selamat anda berhasil login');
							echo "<script>
								alert('selamat anda berhasil login');";
								echo "window.location='".site_url('Masyarakat/homemasy')."';</script>";
						


				}else{

						$this->session->set_flashdata('login_failed','<div class="alert alert-danger text-center">username / password salah!</div>');
						echo "<script>
								alert('Username atau password salah');";
								echo "window.location='".site_url('LoginM/index')."';</script>";
						}
					}
					public function logout(){
						$this->session->sess_destroy();
						redirect(base_url('Home/index'));
					}
					
				}