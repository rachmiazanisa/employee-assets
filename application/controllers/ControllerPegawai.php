<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerPegawai extends CI_Controller {

	public function pegawai(){

		$this->data['hasil'] = $this->app_model->JoinTable();
		$this->load->view('BerandaPegawai', $this->data);
	}	

	public function aset(){
		$this->load->view('AsetPegawai');
	}

	public function EditProfile(){
		$this->load->view('EditProfile');
	}

	public function formIT_PC(){
		$this->load->view('FormIT_PC');
	}

	public function formIT_HP(){
		$this->load->view('FormIT_HP');
	}

	public function formIT_Printer(){
		$this->load->view('FormIT_Printer');
	}

	public function formKendaraan(){
		$this->load->view('FormKendaraan');
	}
	public function formProperty(){
		$this->load->view('FormProperty');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}
?>