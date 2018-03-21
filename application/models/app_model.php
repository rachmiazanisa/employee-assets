<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {


	public function proseslogin($nip,$pass){
		$this->db->where('NIK',$nip);
		$pass = $this->db->where('Password',$pass);
	
		return $this->db->get('user')->row();
	
	}

	// public function jumKendaraan($id){
	// 	$this->db->where('IDKendaraan',$id);
	// 	return $this->db->get('kendaraan')->row();
	// }
	public function cekIDAset($id){
		$this->db->where('IDAset', $id);
		return $this->db->get('aset')->row();
	}

	
	public function cekIDDetailAset($id){
		$this->db->where('ID_DetailAset', $id);
		return $this->db->get('tipeaset')->row();
	}	

	public function tambahData($table_name, $data){
		$tambah = $this->db->insert($table_name, $data);
		return $tambah; 
	}

	public function EditData($table_name, $data){
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

	public function JoinTable(){
		$this->db->select('*');
		$this->db->from('tipeaset');
		$this->db->join('aset','aset.IDAset = tipeaset.IDAset');
		$this->db->where('NIK', $_SESSION['user']);
		$query = $this->db->get();
		return	$query->result_array();


	}

	public function getUser($table_name)
	{
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function getUserPegawai($table_name,$nip)
	{
		$this->db->where('NIK', $nip);
		$get_user = $this->db->get($table_name);
		return $get_user->result_array();
	}

	public function hapusData($table_name, $nip){
		$this->db->where('NIK',$nip);
		$hapus = $this->db->delete($table_name);
		return $hapus;

	}

	public function getAset(){
		$this->db->select('*');
		$this->db->from('tipeaset');
		$this->db->join('aset','aset.IDAset = tipeaset.IDAset');
		$query = $this->db->get();
		return	$query->result_array();
	}

	public function detail(){
		$this->db->select('*');
		$this->db->from('tipeaset');
		$this->db->join('it','tipeaset.ID_DetailAset = it.ID_DetailAset','left');
		$this->db->join('kendaraan', 'kendaraan.ID_DetailAset = tipeaset.ID_DetailAset','left');
		$this->db->join('property', 'property.ID_DetailAset = tipeaset.ID_DetailAset','left');
		$query = $this->db->get();
		return $query->result_array();

		

	}

}