<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');

	}
	public function ceklogin(){
		if(isset($_POST['submit'])){
			$nip = $this -> input ->post('nip',true);
			$pass = $this -> input ->post('password',true);
			if(!empty(trim($nip)) && !empty(trim($pass))){
				$cek = $this ->app_model -> proseslogin($nip,$pass);
				$hasil = count($cek);
				if($hasil > 0){
					$pelogin = $this->db->get_where('user',array('NIK' => $nip, 'Password' => $pass))->row();
						$_SESSION['user'] = $nip;
						$_SESSION['pass'] = $pass;
						$_SESSION['nama'] = $pelogin->Nama;
						$_SESSION['level'] = $pelogin->level;
						$_SESSION['alamat'] = $pelogin->Alamat;
						$_SESSION['divisi'] = $pelogin->Divisi;
						$_SESSION['jeniskelamin'] = $pelogin->JenisKelamin;
						$_SESSION['telepon'] = $pelogin->Telepon;
					if($pelogin->level == 'admin'){
						redirect('ControllerAdmin/admin');	
					}else{
						redirect('ControllerPegawai/pegawai');
					}
				}else{
					redirect('welcome/index.php');
				}
			}

		}
	}

	public function insert(){
		$nip =$_POST['nip'];
		$pass = $_POST['password'];
		$nama =$_POST['namalengkap'];
		$JenisKelamin =$_POST['jeniskelamin'];
		$alamat =$_POST['alamat'];
		$divisi =$_POST['divisi'];
		$telepon =$_POST['telepon'];
		$level =$_POST['level'];
		$data = array('NIK'=>$nip, 'Password' =>$pass,'Nama'=>$nama, 'JenisKelamin'=> $JenisKelamin, 'Alamat'=> $alamat, 'Divisi'=>$divisi, 'Telepon'=> $telepon, 'level'=> $level);
		$tambah = $this->app_model->tambahData('user',$data);
		if($tambah>0){
			echo $_SESSION['user'];
			redirect('ControllerAdmin/admin');
		}else{
			echo "Gagal Disimpan";
		}
	}

	public function form_edit(){
		$this->load->view('form-edit');
	}
	public function edit(){
		$nip = $_SESSION['user'];
		$pass = $_POST['password'];
		$nama = $_POST['namalengkap'];
		$JenisKelamin =$_POST['jeniskelamin'];
		$alamat =$_POST['alamat'];
		$divisi =$_POST['divisi'];
		$telepon =$_POST['telepon'];
		$level = $_SESSION['level'];
		 //ganti nilai session
		$_SESSION['pass'] - $pass;
		$_SESSION['nama'] = $nama;
		$_SESSION['alamat'] = $alamat;
		$_SESSION['divisi'] = $divisi;
		$_SESSION['telepon'] = $telepon;

		$data = array('Password' => $pass, 'Nama' => $nama,'JenisKelamin' => $JenisKelamin, 'Alamat' => $alamat, 'Divisi' => $divisi, 'Telepon' =>$telepon, 'level' => $level );


		$edit = $this->app_model->EditData('user', $data);
		if($edit>0){
			redirect('ControllerPegawai/pegawai');
		}else{
			echo "Gagal Edit Profile";
		}

	}

	public function CekTipeAset(){
		$nip = $_SESSION['user'];
		$tipeaset =$_POST['TipeAset'];
		$jenisaset=$_POST['JenisAset'];
		$idaset = $_POST['idaset'];
		$iddetailaset = $_SESSION['user'].'-'.$_POST['noitem'];
		$tgl = $_SESSION['tgl'];
		$_SESSION['iddetailasetK'] = $iddetailaset;
		$_SESSION['iddetailasetP'] = $iddetailaset;
		$_SESSION['iddetailasetI'] = $iddetailaset;

		$cekIDAset = $this ->app_model -> cekIDAset($idaset);
		$hasilIDAset = count($cekIDAset);
		
		if($hasilIDAset == 0){
		$aset = array('IDAset' =>$idaset,'NIK'=>$nip);
		$tambah = $this->app_model->tambahData('aset',$aset);
		}

		$cekIDDetailAset = $this ->app_model -> cekIDDetailAset($iddetailaset);
		$hasilIDDetailAset = count($cekIDDetailAset);
		if($hasilIDDetailAset == 0){
			if($tipeaset =='asetKendaraan'){
				$detail = array('ID_DetailAset' => $iddetailaset, 'tanggal'=> $tgl,'asetKendaraan' => $jenisaset, 'IDAset' => $idaset);
				$_SESSION['iddetailasetK'] = $iddetailaset;
			}elseif ($tipeaset =='asetProperty'){
				$detail = array('ID_DetailAset' => $iddetailaset, 'tanggal'=> $tgl,'asetProperty' => $jenisaset, 'IDAset' => $idaset);
				$_SESSION['iddetailasetP'] = $iddetailaset;
			}else{
				$detail = array('ID_DetailAset' => $iddetailaset, 'tanggal'=> $tgl,'asetIT' => $jenisaset, 'IDAset' => $idaset);
				$_SESSION['iddetailasetI'] = $iddetailaset;
			}
			$tambah = $this->app_model->tambahData('tipeaset',$detail);
		}elseif ($hasilIDDetailAset > 0) {
			if($tipeaset =='asetKendaraan'){
				$detail = array('tanggal'=> $tgl,'asetKendaraan' => $jenisaset, 'IDAset' => $idaset);
				$_SESSION['iddetailasetK'] = $iddetailaset;
			}elseif ($tipeaset =='asetProperty'){
				$detail = array('tanggal'=> $tgl,'asetProperty' => $jenisaset, 'IDAset' => $idaset);
				$_SESSION['iddetailasetP'] = $iddetailaset;
			}else{
				$detail = array('tanggal'=> $tgl,'asetIT' => $jenisaset, 'IDAset' => $idaset);
				$_SESSION['iddetailasetI'] = $iddetailaset;
			}
			$tambah = $this->app_model->EditData('tipeaset',$detail);
		}

		
		if(($tipeaset == 'asetKendaraan') && ($jenisaset == 'mobil')){
			redirect('ControllerPegawai/formKendaraan');	
		}elseif (($tipeaset == 'asetProperty') && ($jenisaset == 'rumah')) {
			redirect('ControllerPegawai/formProperty');	
		}elseif (($tipeaset == 'asetIT') && ($jenisaset == 'printer')) {
			redirect('ControllerPegawai/formIT_Printer');
		}elseif (($tipeaset == 'asetIT') && ($jenisaset == 'Smartphone')) {
			redirect('ControllerPegawai/formIT_HP');
		}elseif (($tipeaset == 'asetIT') && ($jenisaset == 'PC')){
			redirect('ControllerPegawai/formIT_PC');
		}
	}
	public function insertAsetIT(){
	
		$iddetailaset = $_SESSION['iddetailasetI'];

		if($_SESSION['HP']=='1'){
			$merkHP =$_POST['MSmartphone'];
			$memory = $_POST['memory'];
			$ramHP = $_POST['ramSmartphone'];
			$osHP = $_POST['ossmartphone'];
			$kamera = $_POST['kamera'];
			$ukuranlayar =$_POST['layar'];
			$data = array('MerkSmartphone'=>$merkHP,'RAMSmartphone' =>$ramHP,'memory' => $memory,'OSSmartphone'=> $osHP, 'Kamera'=>$kamera, 'UkuranLayar' => $ukuranlayar ,'ID_DetailAset' => $iddetailaset);
					$_SESSION['HP']=='0';
		}elseif ($_SESSION['PC']=='1') {
			$merkPC = $_POST['merkPC'];
			$processor =$_POST['processor'];
			$harddisk =$_POST['harddisk'];
			$osPC =$_POST['osPC'];
			$ramPC = $_POST['ramPC'];
			$data = array('MerkPC'=>$merkPC, 'RAM_PC' =>$ramPC,'Processor'=>$processor, 'Harddisk'=> $harddisk, 'OS_PC'=> $osPC , 'ID_DetailAset' => $iddetailaset);
			$_SESSION['PC']=='0';
		}elseif ($_SESSION['printer'] =='1') {
			$merkPrinter = $_POST['merkPrinter'];
			$jeniskoneksi = $_POST['jeniskoneksi'];
			$daya =$_POST['daya'];
			$metodecetak =$_POST['metodecetak'];
			$resolusi =$_POST['resolusi'];
			$data = array('MerkPrinter'=>$merkPrinter, 'JenisKoneksi' => $jeniskoneksi , 'Daya' => $daya ,'MetodeCetak' => $metodecetak , 'ResolusiMax' => $resolusi , 'ID_DetailAset' => $iddetailaset);
			$_SESSION['printer'] =='0';
		}

		$tambah = $this->app_model->tambahData('it',$data);

		if($tambah>0){
			redirect('ControllerPegawai/aset');
		}else{
			echo "Gagal Disimpan";
		}	
	}

	public function insertAsetKendaraan(){
		$nopolisi =$_POST['plat'];
		$warna = $_POST['warna'];
		$tahun =$_POST['tahun'];
		$jenis =$_POST['tipemobil'];
		$merk =$_POST['merk'];
		$iddetailaset = $_SESSION['iddetailasetK'];
		$data = array('NoPolisi'=>$nopolisi, 'Warna' =>$warna,'Tahun'=>$tahun, 'Jenis'=> $jenis, 'MerkMobil'=> $merk,'ID_DetailAset'=>$iddetailaset);
		$tambah = $this->app_model->tambahData('kendaraan',$data);
		if($tambah>0){
			redirect('ControllerPegawai/aset');
		}else{
			echo "Gagal Disimpan";
		}	
	}

	public function insertAsetProperty(){
		$alamat =$_POST['alamat'];
		$iddetailaset = $_SESSION['iddetailasetP'];
		$data = array('Alamat'=>$alamat,'ID_DetailAset'=>$iddetailaset);
		$tambah = $this->app_model->tambahData('property',$data);
		if($tambah>0){
			redirect('ControllerPegawai/aset');
		}else{
			echo "Gagal Disimpan";
		}	
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome/index');
	}

	
}
