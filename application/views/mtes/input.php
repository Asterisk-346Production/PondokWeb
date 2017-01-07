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
                          <span>AajJ</span>
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
                     <section class="panel">
                          <header class="panel-heading">Insert</header>
                          <div class="panel-body">
                                  <!-- <?php echo form_open(base_url('mtest/htmlto'), 'class="form-horizontal "'); ?>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nm</label>
                                      <div class="col-sm-10">
                                          <input name="nmt" type="text" required="required" class="form-control" id="nmt" maxlength="60">
                                          <span class="help-block"><?php echo form_error('nmt'); ?></span>
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-2 control-label">Dt</label>
                                      <div class="col-sm-10">
                                          <input name="dtt" type="text" required="required" class="form-control" id="dtt" maxlength="60">
                                          <span class="help-block"><?php echo form_error('dtt'); ?></span>
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-2 control-label">Or</label>
                                      <div class="col-sm-10">
                                          <input name="orm" type="text" required="required" class="form-control" id="orm" maxlength="60">
                                          <span class="help-block"><?php echo form_error('orm'); ?></span>
                                      </div>
                                  </div>
                                  <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-primary btn-md btn-block', 'value' => 'Example Export PDF')); ?>
                              <?php echo form_close(); ?> -->
                              <a href="<?php echo base_url(); ?>mtest/htmlto" class="btn btn-primary btn-md btn-block">Example Export PDF</a>
                              <br/>
                              <a href="<?php echo base_url(); ?>mtest/blanko" class="btn btn-primary btn-md btn-block">Example Blanko</a>
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
    <!-- nice scroll -->
    <script src="<?php echo base_url('assets/adminLte/js/jquery.scrollTo.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminLte/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
	<!--custome script for all page-->
    <script src="<?php echo base_url('assets/adminLte/js/scripts.js'); ?>"></script>
  </body>
</html>
