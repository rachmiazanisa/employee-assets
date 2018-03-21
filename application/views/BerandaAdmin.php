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
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">    

               <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Home</h3>
          <ol class="breadcrumb">
            <li><i class="icon_document_alt"></i>Home</li>
          </ol>
        </div>
       </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Daftar Pegawai
                          </header>
                          <div class="panel-body">
                              <div class="form">
	</form><br>
         <table class="table table-striped table-advance table-hover">
            <tbody>
                <tr>
               <th> No</th>
               <th> NIP</th>
                <th> Jenis Kelamin</th>
                <th> Alamat</th>
                <th> Divisi</th>
                <th> Telepon</th>
                <th> Level</th>
                <th> Opsi</th>
                </tr>
                <tr>
                    <?php
                    $no=1; 
                    foreach ($hasil as $r){ ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $r['NIK'] ?></td>
                    <td><?php echo strtoupper($r['Nama']) ?></td>
                    <td><?php echo $r['JenisKelamin'] ?></td>
                    <td><?php echo $r['Alamat'] ?></td>
                    <td><?php echo strtoupper($r['Divisi']) ?></td>
                    <td><?php echo '0'.$r['Telepon'] ?></td>
                    <td><?php echo $r['level'] ?></td>
                    <td>
                        <a class="btn btn-danger" type="submit" href="<?php echo site_url()?>">Hapus</a> 

                    </td>
                </tr>
                <?php	}	?>
		</table>
  </body>
</html>
