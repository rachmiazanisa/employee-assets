<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" />    
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>" type="text/css">
	<link href="<?php echo base_url('assets/css/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet">
    <!-- Custom styles -->
	<link href="<?php echo base_url('assets/css/widgets.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/xcharts.min.css')?>" rel=" stylesheet">	
	<link href="<?php echo base_url('assets/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
              
          

            <!--logo start-->
            <a href="index.html" class="logo">Selamat Datang <span class="lite">Admin</span></a>
            <!--logo end-->

      </header>     
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">

              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo site_url('ControllerAdmin/admin') ?>">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
				 
                  
                  <li>
                      <a class="" href="<?php echo site_url('ControllerAdmin/register')?>">
                          <i class="icon_profile"></i>
                          <span>Registrasi Pegawai</span>
                      </a>
                  </li>
                  <li>                     
                      <a class="" href="<?php echo site_url('ControllerAdmin/dataAset')?>">
                          <i class="icon_piechart"></i>
                          <span>Data Aset</span>
                          
                      </a>
                   </li>
                      <li>                     
                      <a class="" href="<?php echo site_url('welcome/logout')?>" onclick="return confirm('apakah anda yakin ingin keluar?')">
                          <i class="icon_key_alt"></i>
                          <span>LogOut</span>
                          
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
          </li>
          </ul>

      </aside>
       <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Registrasi</h3>
					<ol class="breadcrumb">
						<li><i class="icon_house_alt"></i></i><a href="<?php echo site_url('ControllerAdmin/admin') ?>">Home</a></li>
						<li><i class="icon_document_alt"></i>Registrasi Pegawai</li>
					</ol>
				</div>
		   </div>

		  		 <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Registrasi Pegawai
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="<?php echo site_url('welcome/insert') ?>" novalidate="novalidate" >
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">NIP<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="nip" placeholder="NIP">
                                              <br>
                                          </div>
                                       </div>

										<div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nama Lengkap<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="namalengkap" placeholder="Nama Lengkap">
                                              <br>
                                          </div>
                                       </div>

                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Password<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="password" name="password" placeholder="Password">
                                          </div>
                                      </div>


                                      <div class="form-group ">
                                        	<label class="control-label col-lg-2" for="inputSuccess">Jenis Kelamin</label>
                                      		<div class="col-lg-10">
                                          		<div class="radio">
                                              		<label>
                                                  	<input type="radio" name="jeniskelamin" id="optionsRadios1" value="laki-laki" checked>
                                                 	 Laki-Laki
                                              		</label>
                                          		</div>
                                          		<div class="radio">
                                             		<label>
                                                  	<input type="radio" name="jeniskelamin" id="optionsRadios2" value="perempuan">
                                                 	 Perempuan
                                             		</label>
                                         		 </div>
                                      		</div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Alamat<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="alamat" placeholder="Alamat">
                                              <br>
                                          </div>
                                       </div>


                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Divisi<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="divisi" placeholder="Divisi">
                                              <br>
                                          </div>
                                       </div>

                                        <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">No Telepon<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="telepon" placeholder="No Telepon">
                                              <br>
                                          </div>
                                       </div>

                                        <div class="form-group ">
                                        	<label class="control-label col-lg-2" for="inputSuccess">Level</label>
                                      		<div class="col-lg-10">
                                          		<div class="radio">
                                              		<label>
                                                  	<input type="radio" name="level" id="optionsRadios1" value="admin" checked>
                                                 	 Admin
                                              		</label>
                                          		</div>
                                          		<div class="radio">
                                             		<label>
                                                  	<input type="radio" name="level" id="optionsRadios2" value="pegawai">
                                                 	 Pegawai
                                             		</label>
                                         		 </div>
                                      		</div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" name="submit" onclick="return confirm('apakah anda yakin ingin menyimpan data?')">Simpan</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
           </div> 
