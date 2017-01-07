<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aplikasi Admin Pondok Web</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url()."assets/adminLte/"?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url()."assets/adminLte/"?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()."assets/adminLte/"?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()."assets/adminLte/"?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()."assets/adminLte/"?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/adminLte/"?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="http://192.168.1.73/rentalmobil/assets/js/html5shiv.js"></script>
      <script src="http://192.168.1.73/rentalmobil/assets/js/respond.min.js"></script>
      <script src="http://192.168.1.73/rentalmobil/assets/js/lte-ie7.js"></script>
    <![endif]-->
  </head>


  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>

            <!--logo start-->
            <a href="<?php echo base_url(); ?>" class="logo">Aplikasi Admin&nbsp;<span>Pondok Web</span></a>
            <!--logo end-->
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a href="<?php echo base_url(''); ?>" class="">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url(''); ?>./DataUserList" class="">
                          <i class="icon-user"></i>
                          <span>Data Admin</span>
                      </a>
                  </li>
                     <li>
                      <a href="<?php echo base_url(''); ?>./dataAdmin" class="">
                          <i class="icon-user"></i>
                          <span>Data Anda</span>
                      </a>
                  </li>
                     <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_id-2"></i>
                          <span>Data Akademik</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="#">Form Input Rapor - Demo</a></li>
                      </ul>
                  </li>
                  <?php if($level_user <3){?>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_id-2"></i>
                          <span>Data Referensi</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="#">Referensi - Hari</a></li>
                          <li><a class="" href="#">Referensi - Beasiswa</a></li>
                          <li><a class="" href="#">Referensi - Jadwal</a></li>
                          <li><a class="" href="#">Referensi - Jam</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_karyawan">Referensi - Karyawan</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_kompetensi">Komptentensi</a></li>
                          <li><a class="" href="#">Referensi - Kelas</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pelajaran">Referensi - Pelajaran</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pembayaran">Referensi - Pembayaran</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pendidikan">Referensi - Pendidikan</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_ruangan">Referensi - Ruangan</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_santri">Referensi - Santri</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_skill">Referensi - Skill</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_status">Referensi - Status</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_skill">Referensi - Status</a></li>
                          <li><a class="" href="#">Referensi - Transaksi</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./referensi/referensi_jenis_wali">Referensi - Wali</a></li>
                      </ul>
                  </li>
                  <?php }?>
                  <li>
                      <a href="#" class="">
                          <i class="icon-cog"></i>
                          <span>Log Proses</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url(''); ?>./postingBlog" class="">
                          <i class="icon-star"></i>
                          <span>Posting Blog</span>
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url(''); ?>./configBlog" class="">
                          <i class="icon-cog"></i>
                          <span>Config Blog</span>
                      </a>
                  </li>
                  <!-- <li>
                      <a href="<?php echo base_url(''); ?>./transaksisewa" class="">
                          <i class="icon-money"></i>
                          <span>Transaksi Sewa</span>
                      </a>
                  </li> -->
                  <li>
                      <a href="<?php echo base_url('loginController/logout'); ?>" class="">
                          <i class="icon-signout"></i>
                          <span>Logout</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <!-- page start-->
			<div class="row">
                  <div class="col-lg-12">
                      ini nanti request pak puji
                  </div>
              </div>
			<!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url('assets/adminLte/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminLte/js/bootstrap.min.js'); ?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url('assets/adminLte/js/jquery.scrollTo.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminLte/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
	<!--custome script for all page-->
    <script src="<?php echo base_url('assets/adminLte/js/scripts.js'); ?>"></script>
  </body>
</html>