<?php	
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerAdmin extends CI_Controller {

	public function admin(){
		$this->db->where('level','pegawai');
		$this->data['hasil'] = $this->app_model->getUser('user');
		$this->load->view('BerandaAdmin', $this->data);

	}

	public function register(){
		$this->load->view('RegistrasiPegawai');
	}	

	public function delete($r){
		
		$hapus = $this->app_model->hapusData('user',$r);
		if($hapus>0){
			redirect('ControllerAdmin/admin');
		}else{
			echo "Gagal Disimpan";
		}
	}

	public function dataAset(){
		$this->data['hasil'] = $this->app_model->getAset();
		$this->load->view('DataAset', $this->data);
	}

	public function tampilDetail(){
		$this->data['hasil'] = $this->app_model->detail();
		$this->load->view('rincianData', $this->data);
	}
} 

?>