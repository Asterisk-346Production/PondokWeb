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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css"> -->
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
           <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url(); ?>assets/adminLte/img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php echo $id_user ?></span>
                          <!--   <b class="caret"></b> -->
                        </a>
                    </li>
                </ul>
            </div>
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
                  <?php if($level_user == 1){ ?>
                      <a href="<?php echo base_url(''); ?>./UserList" class="">
                          <i class="icon-user"></i>
                          <span>Data Admin</span>
                      </a>
                   <?php }?>
                  </li>
                  <?php if($level_user == 3) {?>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-user"></i>
                          <span>Data Saya</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(''); ?>./dataSaya">Data Diri Anda</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./saldo">Tabungan Mingguan Anda</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./rapor">Data Nilai Rapor Anda</a></li>
                      </ul>
                  </li>
                  <?php }else{?>
                      <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-user"></i>
                          <span>Data Saya</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                        <ul class="sub">
                          <li><a class="" href="<?php echo base_url(''); ?>./dataSaya">Data Diri Anda</a></li>
                          <li><a class="" href="<?php echo base_url(''); ?>./saldo">Tabungan Mingguan Anda</a></li>
                        </ul>
                      </li>
                  <?php }?>
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
                      <a href="<?php echo base_url('login/logout'); ?>" class="">
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
            <!-- <script>
                  function myFunction() {
                    // Declare variables 
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("sample_2");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query

                    for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[2];
                      if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                          tr[i].style.display = "";
                        } else {
                          tr[i].style.display = "none";
                        }
                      } 
                    }
                  }
            </script> -->

			<div class="row">
                  <div class="col-lg-12">
                     <section class="panel">
                              <header class="panel-heading">
                                <a class="btn btn-primary" href="<?php echo base_url().'referensi/referensi_jenis_karyawan/addReferensiJenisKaryawan/'; ?>"><i class="icon_plus_alt2"></i> Tambah Data</a>
                              </header>
                              <div class ="panel-body">
                              <!--   <div class="form-horizontal">
                                  <input type="text" class="form-control" placeholder="Cari..." id="myInput" name ="myInput">
                                </div> -->
                              </div>
                              <div class="panel-body">
                              <table class="table table-striped table-advance table-hover border-top" id="sample_2">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>ID Jenis Karywan</th>
                                  <th>Urian Jenis Karyawan</th>
                                  <th>Urian Jenis Karyawan Arab</th>
                                  <th>Keterangan</th>
                                  <th><i class="icon_cogs"></i> Action</th>
                                </tr>
                              </thead>
                                      <tbody>
                                        <?php $no=0; foreach ($m_jenis_karyawan as $data): ?>
                                  <tr>
                                    <td><?php echo ++$no; ?></td>
                                    <td><?php echo $data['id_jns_karyawan']; ?></td>
                                    <td><?php echo $data['uraian']; ?></td>
                                    <td><?php echo $data['uraian_ar'];?></td>
                                    <td><?php echo $data['keterangan'];?></td>
                                    <td><div class="btn-group">
                                      <a class="btn btn-success" href="<?php echo base_url().'referensi/referensi_jenis_karyawan/updateReferensiJenisKaryawan/'.$data['id_jns_karyawan']; ?>"><i class="icon_pencil-edit"></i></a>
                                      <a class="btn btn-danger" href="<?php echo base_url().'referensi/referensi_jenis_karyawan/deleteReferensiJenisKaryawan/'.$data['id_jns_karyawan']; ?>"><i class="icon_close_alt2"></i></a>
                                    </div></td>
                                  </tr>
                                <?php endforeach; ?>
                              </tbody>
                              </table>
                              </div>
                      </section>
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
   <script type="text/javascript" src="<?php echo base_url('assets/datatable/js/jquery.dataTables.min.js');?>"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url('assets/adminLte/js/jquery.scrollTo.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminLte/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
	<!--custome script for all page-->
    <script src="<?php echo base_url('assets/adminLte/js/scripts.js'); ?>"></script>
      <script>
              $(document).ready(function() {
               $('#sample_2').DataTable();
              } );
            </script>
  </body>
</html>
