<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png')?>">
  <meta charset="utf-8">
  <title>Pegawai</title>
  <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url('assets/css/bootstrap-theme.css')?>" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url('assets/css/elegant-icons-style.css')?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/assets/fullcalendar/fullcalendar/fullcalendar.css')?>" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url('assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')?>" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css')?>" type="text/css">
  <link href="<?php echo base_url('assets/css/jquery-jvectormap-1.2.2.css')?>" rel="stylesheet">
    <!-- Custom styles -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.css')?>">
  <link href="<?php echo base_url('assets/css/widgets.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('assets/css/xcharts.min.css')?>" rel=" stylesheet"> 
  <link href="<?php echo base_url('assets/css/jquery-ui-1.10.4.min.css')?>" rel="stylesheet">

</head>
<body>

<div id="container">
<!-- container section start -->
  <section id="container" class="">      
      <header class="header dark-bg">
            <!--logo start-->
            <a href="index.html" class="logo">Selamat Datang <span class="lite"><?php echo $_SESSION['nama'] ?></span></a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
          </div>
    </header>

  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="pegawai">
                          <i class="icon_house_alt"></i>
                          <span>Beranda</span>
                      </a>
                  </li>
          <li class="active">
                      <a class="" href="aset" >
                          <i class="icon_document_alt"></i>
                          <span>Tambah Aset</span>
                      </a>
                  </li>       
                  <li class="active">
                      <a class="" href="EditProfile">
                        <i class="icon_desktop"></i>
                          <span>Edit Profile</span>
                      </a>
                  </li>
                  <li>
                      <a class="active" href="logout" onclick="return confirm('apakah anda yakin ingin keluar?')">
                          <i class="icon_genius"></i>
                          <span>Logout</span>
                      </a>
                  </li>
                 </ul>
            </div>
       </aside>
       <!-- sidebar menu end-->
       <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Edit Profile</h3>
          <ol class="breadcrumb">
            <li><i class="icon_document_alt"></i><a href="pegawai">Home</a></li>
            <li><i class="icon_document_alt"></i>Edit Profile</li>
          </ol>
        </div>
       </div>
              <!-- Form validations -->              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Profile
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="<?php echo site_url('welcome/edit') ?>" novalidate="novalidate" >
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">NIP<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="nip" minlength="5" type="text" required="" value="<?php echo $_SESSION['user']?>" readonly>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Nama Lengkap<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="namalengkap" required="" value="<?php echo strtoupper($_SESSION['nama']) ?>">
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Password<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="password" placeholder="Password">
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Jenis Kelamin<span class="required"></span>
                                    
                                          </label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="jeniskelamin" minlength="5" type="text" required="" value="<?php echo $_SESSION['jeniskelamin']?>" readonly>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Alamat<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="alamat" required="" value="<?php echo $_SESSION['alamat'] ?>">
                                          </div>
                                      </div>


                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Divisi<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="divisi" required="" value="<?php echo strtoupper($_SESSION['divisi']) ?>">
                                          </div>
                                      </div>

                                        <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Telepon<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="telepon" required="" value="<?php echo $_SESSION['telepon'] ?>">
                                          </div>
                                      </div>

                                         <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Level<span class="required"></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="level" required="" value="<?php echo $_SESSION['level'] ?>" readonly>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
           </div>
              
              <!-- page end-->
          </section>
    </section>
  <!-- Akhir Konten-->


</body>
</html>