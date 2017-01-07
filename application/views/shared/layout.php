  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  ?><!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

<<<<<<< d2af1226ed22e91f3abe8a4fcd8a9319e6ec20cb
    <title><?php echo $title; ?></title>
=======
      <title><?php echo $title == null ? "Aplikasi Admin Pondok Web" : $title; ?></title>
>>>>>>> test join for sure, tobe update

      <!-- Bootstrap CSS -->
      <link href="<?php echo base_url()."assets/adminLte/"?>css/bootstrap.min.css" rel="stylesheet">
      <!-- bootstrap theme -->
      <link href="<?php echo base_url()."assets/adminLte/"?>css/bootstrap-theme.css" rel="stylesheet">
      <!-- font icon -->
      <link href="<?php echo base_url()."assets/adminLte/"?>css/elegant-icons-style.css" rel="stylesheet" />
      <link href="<?php echo base_url()."assets/adminLte/"?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!-- Custom styles -->
      <link href="<?php echo base_url()."assets/adminLte/"?>css/style.css" rel="stylesheet">
      <link href="<?php echo base_url()."assets/adminLte/"?>css/style-responsive.css" rel="stylesheet" />

      <!-- javascripts -->
      <script src="<?php echo base_url('assets/adminLte/js/jquery.js'); ?>"></script>
      <script src="<?php echo base_url('assets/adminLte/js/bootstrap.min.js'); ?>"></script>
      <!-- nice scroll -->
      <script src="<?php echo base_url('assets/adminLte/js/jquery.scrollTo.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/adminLte/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
      <!--custome script for all page-->
      <script src="<?php echo base_url('assets/adminLte/js/scripts.js'); ?>"></script>
    </head>

    <body>
    <!-- container section start -->
    <section id="container">
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
                    <li class="<?php echo $menu == "Dashboard" ? "active" : "" ?>">
                        <a href="<?php echo base_url(''); ?>">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <?php if($level_user == 1){ ?>
                      <li class="sub-menu <?php echo $menu == "Admin" ? "active" : "" ?>">
                          <a href="javascript:;">
                              <i class="icon-user"></i>
                              <span>Data Admin</span>
                          </a>
                          <ul class="sub">
                            <li class="<?php echo $menu == "Admin" && $submenu == "A_list_user" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./userList">List User</a></li>
                            <li class="<?php echo $menu == "Admin" && $submenu == "A_karyawan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./karyawanList">List Data Karyawan</a></li>
                            <li class="<?php echo $menu == "Admin" && $submenu == "A_Admin" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./adminList">List Data Admin</a></li>
                          </ul>
                      </li>
                    <?php }?>
                    <li class="sub-menu <?php echo $menu == "Pribadi" ? "active" : "" ?>">
                        <a href="javascript:;">
                            <i class="icon-user"></i>
                            <span>Data Saya</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
<<<<<<< d2af1226ed22e91f3abe8a4fcd8a9319e6ec20cb
                          <li class="<?php echo $menu == "Admin" && $submenu == "Adm_list_user" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./userList">List User</a></li>
                          <li class="<?php echo $menu == "Admin" && $submenu == "Adm_karyawan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./karyawanList">List Data Karyawan</a></li>
                          <li class="<?php echo $menu == "Admin" && $submenu == "Adm_Admin" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./indexAdmin">List Data Admin</a></li>
                        </ul>
                    </li>
                  <?php }?>
                  <li class="sub-menu <?php echo $menu == "Pribadi" ? "active" : "" ?>">
                      <a href="javascript:;">
                          <i class="icon-user"></i>
                          <span>Data Saya</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li class="<?php echo $menu == "Pribadi" && $submenu == "P_Diri" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./dataSaya">Data Diri Anda</a></li>
                          <li class="<?php echo $menu == "Pribadi" && $submenu == "P_Tabungan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./saldo">Tabungan Mingguan Anda</a></li>
                          <?php if($level_user == 3) {?>
                            <li class="<?php echo $menu == "Pribadi" && $submenu == "P_Rapor" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./rapor">Data Nilai Rapor Anda</a></li>
                          <?php }?>
                      </ul>
                  </li>
                  <li class="sub-menu <?php echo $menu == "Akademik" ? "active" : "" ?>">
                      <a href="javascript:;">
                          <i class="icon_id-2"></i>
                          <span>Data Akademik</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Bayanat" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/bayanat">Bayanat</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Rekap" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/rekap">Rekap Nilai</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Rapor" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/rapor">Rapor</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Absen" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/absensi">Absensi</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Guru" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/guru">Guru</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Santri" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/santri">Santri</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Ruangan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/ruangan">Ruangan</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_Kelas" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/kelas">Kelas</a></li>
                        <li class="<?php echo $menu == "Akademik" && $submenu == "Ac_KelasJadwal" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./data_akademik/kelasJadwal">Kelas Jadwal</a></li>
                      </ul>
                  </li>
                  <?php if($level_user <3){?>
                    <li class="sub-menu <?php echo $menu == "Referensi" ? "active" : "" ?>">
=======
                            <li class="<?php echo $menu == "Pribadi" && $submenu == "P_Diri" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./dataSaya">Data Diri Anda</a></li>
                            <li class="<?php echo $menu == "Pribadi" && $submenu == "P_Tabungan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./saldo">Tabungan Mingguan Anda</a></li>
                            <?php if($level_user == 3) {?>
                              <li class="<?php echo $menu == "Pribadi" && $submenu == "P_Rapor" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./rapor">Data Nilai Rapor Anda</a></li>
                            <?php }?>
                        </ul>
                    </li>
                    <li class="sub-menu <?php echo $menu == "Akademik" ? "active" : "" ?>">
>>>>>>> test join for sure, tobe update
                        <a href="javascript:;">
                            <i class="icon_id-2"></i>
                            <span>Data Akademik</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
<<<<<<< d2af1226ed22e91f3abe8a4fcd8a9319e6ec20cb
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Hari" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_hari">Referensi - Hari</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Beasiswa" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_beasiswa">Referensi - Beasiswa</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Jadwal" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_jadwal">Referensi - Jadwal</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Jam" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_jam">Referensi - Jam</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Karyawan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_karyawan">Referensi - Karyawan</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Kompetensi" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_kompetensi">Kompetensi</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Kelas" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_kelas">Referensi - Kelas</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Pelajaran" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pelajaran">Referensi - Pelajaran</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Pembayaran" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pembayaran">Referensi - Pembayaran</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Pendidikan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pendidikan">Referensi - Pendidikan</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Ruangan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_ruangan">Referensi - Ruangan</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Santri" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_santri">Referensi - Santri</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Skill" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_skill">Referensi - Skill</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Status" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_status">Referensi - Status</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Transaksi" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_transaksi">Referensi - Transaksi</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Ujian" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_transaksi">Referensi - Ujian</a></li>
                            <li class="<?php echo $menu == "Referensi" && $submenu == "R_Wali" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_wali">Referensi - Wali</a></li>
                        </ul>
                    </li>
                  <?php }?>
                  <li class="<?php echo $menu == "Log" ? "active" : "" ?>">
                      <a href="<?php echo base_url(''); ?>./">
                          <i class="icon-cog"></i>
                          <span>Log Proses</span>
                      </a>
                  </li>
                  <?php if($level_user == 1 || $level_user == 2) {?>
                    <li class="<?php echo $menu == "Blog" ? "active" : "" ?>">
                        <a href="<?php echo base_url(''); ?>./postingBlog">
                            <i class="icon-star"></i>
                            <span>Posting Blog</span>
=======
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Bayanat" ? "active" : "" ?>"><a href="#">For Bayanat</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Rekap" ? "active" : "" ?>"><a href="#">For Rekap</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Rapor" ? "active" : "" ?>"><a href="#">For Rapor</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Absen" ? "active" : "" ?>"><a href="#">For Absen</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Guru" ? "active" : "" ?>"><a href="#">For Guru</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Santri" ? "active" : "" ?>"><a href="#">For Santri</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Ruangan" ? "active" : "" ?>"><a href="#">For Ruangan</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_Kelas" ? "active" : "" ?>"><a href="#">For Kelas</a></li>
                          <li class="<?php echo $menu == "Akademik" && $submenu == "A_KelasJadwal" ? "active" : "" ?>"><a href="#">For Kelas_Jadwal</a></li>
                        </ul>
                    </li>
                    <?php if($level_user <3){?>
                      <li class="sub-menu <?php echo $menu == "Referensi" ? "active" : "" ?>">
                          <a href="javascript:;">
                              <i class="icon_id-2"></i>
                              <span>Data Referensi</span>
                              <span class="menu-arrow arrow_carrot-right"></span>
                          </a>
                          <ul class="sub">
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Hari" ? "active" : "" ?>"><a href="#">Referensi - Hari</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Beasiswa" ? "active" : "" ?>"><a href="#">Referensi - Beasiswa</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Jadwal" ? "active" : "" ?>"><a href="#">Referensi - Jadwal</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Jam" ? "active" : "" ?>"><a href="#">Referensi - Jam</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Karyawan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_karyawan">Referensi - Karyawan</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Kompetensi" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_kompetensi">Kompetensi</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Kelas" ? "active" : "" ?>"><a href="#">Referensi - Kelas</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Pelajaran" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pelajaran">Referensi - Pelajaran</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Pembayaran" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pembayaran">Referensi - Pembayaran</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Pendidikan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_pendidikan">Referensi - Pendidikan</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Ruangan" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_ruangan">Referensi - Ruangan</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Santri" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_santri">Referensi - Santri</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Skill" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_skill">Referensi - Skill</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Status" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_status">Referensi - Status</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Transaksi" ? "active" : "" ?>"><a href="#">Referensi - Transaksi</a></li>
                              <li class="<?php echo $menu == "Referensi" && $submenu == "R_Wali" ? "active" : "" ?>"><a href="<?php echo base_url(''); ?>./referensi/referensi_jenis_wali">Referensi - Wali</a></li>
                          </ul>
                      </li>
                    <?php }?>
                    <li class="<?php echo $menu == "Log" ? "active" : "" ?>">
                        <a href="#">
                            <i class="icon-cog"></i>
                            <span>Log Proses</span>
>>>>>>> test join for sure, tobe update
                        </a>
                    </li>
                    <?php if($level_user == 1 || $level_user ==2) {?>
                      <li class="<?php echo $menu == "Blog" ? "active" : "" ?>">
                          <a href="<?php echo base_url(''); ?>./postingBlog">
                              <i class="icon-star"></i>
                              <span>Posting Blog</span>
                          </a>
                      </li>
                      <li class=" <?php echo $menu == "Config" ? "active" : "" ?>">
                          <a href="<?php echo base_url(''); ?>./configBlog">
                              <i class="icon-cog"></i>
                              <span>Config Blog</span>
                          </a>
                      </li>
                    <?php }?>
                    <li>
                        <a href="<?php echo base_url(''); ?>./login/logout">
                            <i class="icon-signout"></i>
                            <span>Logout</span>
                        </a>
                    </li>
<<<<<<< d2af1226ed22e91f3abe8a4fcd8a9319e6ec20cb
                  <?php } ?>
                  <?php if($level_user == 1) {?>
                    <li class="<?php echo $menu == "Mtest" ? "active" : "" ?>">
                        <a href="<?php echo base_url(''); ?>./mtest">
                            <i class="icon-star"></i>
                            <span>List Testing</span>
                        </a>
                    </li>
                  <?php } ?>
                  <li>
                      <a href="<?php echo base_url(''); ?>./login/logout">
                          <i class="icon-signout"></i>
                          <span>Logout</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
=======
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
>>>>>>> test join for sure, tobe update

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
              <!-- page start-->
                <?php $this->load->view($body); ?>
  			      <!-- page end-->
            </section>
        </section>
        <!--main content end-->
    </section>
    <!-- container section end -->
    </body>
  </html>
