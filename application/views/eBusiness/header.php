<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>eBusiness Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.transitions.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/venobox/venobox.css');?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url('assets/css/responsive.css');?>" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
  <!-- <link data-require="bootstrap-css@2.3.2" data-semver="2.3.2" rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" /> -->
  <script data-require="angular-ui-bootstrap@0.3.0" data-semver="0.3.0" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js"></script>
  
</head>
<body ng-app="myApp" data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>
  <div id="wrapper">
  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="<?=site_url();?>">
                  <h1><span>e</span>Business</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="<?php echo base_url('assets/img/logo.png');?>" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-left">
                  <li class="active">
                    <a href="<?=site_url('jobs/');?>">CARI LOWONGAN</a>
                  </li>
                  <li>
                    <a href="<?=site_url('kategori/');?>">KATEGORI</a>
                  </li>
                  <li>
                    <a href="<?=site_url('gaji/');?>">GAJI</a>
                  </li>
                  <li>
                    <a href="<?=site_url('blog/');?>">TIPS KARIR</a>
                  </li>
                  <li>
                    <a href="<?=site_url('blacklist/');?>">BLACKLIST</a>
                  </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="<?=site_url('login/');?>">LOGIN</a>
                  </li>
                  <li>
                    <a href="<?=site_url('daftar/');?>">DAFTAR</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->