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
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-files-o"></i> Tambah Aset</h3>
          <ol class="breadcrumb">
            <li><i class="icon_document_alt"></i><a href="pegawai">Home</a></li>
            <li><i class="icon_document_alt"></i>Tambah Aset</li>
          </ol>
        </div>
       </div>
              <!-- Form validations -->              
           <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Aset
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="feedback_form" method="POST" action="<?php echo site_url('welcome/CekTipeAset') ?>" novalidate="novalidate" >
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tanggal <span class="required">*</span>
                                          <?php $_SESSION['tgl']=date('Y-m-d')?>
                                          
                                          </label>
                                          <?php
                                            $t = date('m');
                                            if($t<="6"){
                                              $semester=1;
                                            }else{
                                              $semester=2;
                                            }
                                          ?>

                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="tgl" minlength="5" type="text" required="" value="<?php echo $_SESSION['tgl'] ?>" readonly>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">ID ASET<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="text" name="idaset" required="" value="<?php echo $_SESSION['user'].date('Y').'-'.$semester ?>" readonly>
                                          </div>
                                      </div>

                                        <div class="form-group ">
                                          <label class="control-label col-lg-2" for="inputSuccess">Tipe Aset</label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="noitem" id="noitem" onchange="populateSelect()">
                                                    <option value="1">1</option><option value="2">2</option>
                                                    <option value="3">3</option><option value="4">4</option>
                                                    <option value="5">5</option><option value="6">6</option>
                                                    <option value="7">7</option><option value="8">8</option>
                                                    <option value="9">9</option><option value="10">10</option>
                                                    <option value="11">11</option><option value="12">12</option>
                                                    <option value="13">13</option><option value="14">14</option>
                                                    <option value="15">15</option><option value="16">16</option>
                                                    <option value="17">17</option><option value="18">18</option>
                                                    <option value="19">19</option><option value="20">20</option>
                                              </select>
                                          </div>
                                        </div>
                
                                      <div class="form-group ">
                                          <label class="control-label col-lg-2" for="inputSuccess">Tipe Aset</label>
                                          <div class="col-lg-10">
                                              <select class="form-control m-bot15" name="TipeAset" id="TipeAset" onchange="populateSelect()">
                                                  <option value="">Tipe Aset</option>
                                                  <option value="asetKendaraan">Kendaraan</option>
                                                  <option value="asetProperty">Property</option>
                                                  <option value="asetIT">IT</option>
                                              </select>
                                          
                                              <select class="form-control m-bot" name="JenisAset" id="JenisAset"></select>
                                      
                                              <script>
                                                 var itemlist = {
                                                      asetIT: [
                                                        { text: 'Laptop/PC', value: 'PC' },
                                                        { text: 'Smartphone', value: 'Smartphone' },
                                                        { text: 'Printer', value: 'printer' },
                                                      ],

                                                      asetKendaraan: [
                                                        { text: 'Mobil', value: 'mobil' }
                                                      ],

                                                      asetProperty: [
                                                        { text: 'Rumah', value: 'rumah' }
                                                      ]
                                                    }

                                                    function populateSelect () {
                                                      // get items dom
                                                      var items = document.getElementById('JenisAset');

                                                      // save current items doms options number
                                                      var itemCount = items.length

                                                      // remove all current options
                                                      for (var i = 0; i <= itemCount; i++) {
                                                        items.remove(0);
                                                      }

                                                      // get aset dom
                                                      var aset = document.getElementById('TipeAset').value;

                                                      // populate items dom based on aset value
                                                      for (var j = 0; j < itemlist[aset].length; j++) {
                                                        var option = document.createElement('option');
                                                        option.value = itemlist[aset][j].value;
                                                        option.innerHTML = itemlist[aset][j].text;
                                                        items.appendChild(option);
                                                      }
                                                    }
                                              </script>
                                          </div>

                                      </div>                                      
                                      <br>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" name="submit">Lanjut</button>
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

</section>
</div>
</body>
</html>