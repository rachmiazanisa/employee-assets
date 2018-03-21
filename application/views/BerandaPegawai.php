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
	<!--main content start-->
 	<section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
  			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i>Beranda</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="pegawai">Beranda</a></li>
										  	
					</ol>
				</div>
			</div>
			<div class="row">
               	
				<div class="col-lg-9 col-md-12">	
					<div class="panel panel-default">
						<div class="panel-body">
							<table class="table bootstrap-datatable countries">
								<thead>
									<tr>
										<th>No.</th>
										<th>Tanggal</th>
										<th>Kendaraan</th>
										<th>Property</th>
										<th>IT</th>
									</tr>
								</thead>   
								<tbody>
									<tr>
										<?php $no=1; 
											foreach ($hasil as $r){ ?>
									<tr>

									<td><?php echo $no++ ?></td>
									<td><?php echo $r['tanggal']?></td>
									<td><?php echo $r['asetKendaraan'] ?></td>
									<td><?php echo $r['asetProperty'] ?></td>
									<td><?php echo $r['asetIT'] ?></td>

									</tr>
									<?php	}	?>
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
          </section>
    </section>
</section>
</div>
</body>
</html>