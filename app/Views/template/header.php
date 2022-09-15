<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Selamat Datang di Perum PPD">
  
  <meta name="author" content="Perum PPD">

  <title>Perum PPD</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>/assets/images/logo_ppd.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/themefisher-font/style.css');?>">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/lightbox2/dist/css/lightbox.min.css');?>">
  <!-- animation css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/animate/animate.css');?>">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/slick/slick.css');?>">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">  

</head>

<body id="body">

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="<?php echo base_url();?>">
       
		<img class="logo-default" width="150px" height="40px" src="<?php echo base_url();?>/assets/images/logo.png" alt="logo"/>
        <img class="logo-white" width="150px" height="40px" src="<?php echo base_url();?>/assets/images/logo.png" alt="logo"/>
        <img class="logo-white" width="150px" height="50px" src="<?php echo base_url();?>/assets/images/logo_bumn.png" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url();?>">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Tentang Kami
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url('company/history');?>">Sejarah Perusahaan</a>
              <a class="dropdown-item" href="<?php echo base_url('company/culture');?>">Budaya Perusahaan</a>
              <a class="dropdown-item" href="<?php echo base_url('company/visi_misi');?>">Visi dan Misi</a>
              <a class="dropdown-item" href="<?php echo base_url('company/dewas_direksi');?>">Dewan Pengawas & Direksi</a>
              <a class="dropdown-item" href="<?php echo base_url('company/struktur_organisasi');?>">Struktur Organisasi</a>
              <a class="dropdown-item" href="<?php echo base_url('company/gcg');?>">GCG</a>
              <a class="dropdown-item" href="<?php echo base_url('company/penghargaan');?>">Penghargaan</a>
            </div>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Layanan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url('services/jac');?>">Jabodetabek Airport Connexion</a>
              <a class="dropdown-item" href="<?php echo base_url('services/jrc');?>">Jabodetabek Residence Connexion</a>
              <a class="dropdown-item" href="<?php echo base_url('services/wisata');?>">Angkutan Bus Pariwisata</a>
              <a class="dropdown-item" href="<?php echo base_url('services/employee');?>">Angkutan Bus Karyawan</a>
              <a class="dropdown-item" href="<?php echo base_url('services/ads');?>">Ads Placement on The Bus</a>
              <a class="dropdown-item" href="<?php echo base_url('services/redeem_coupon');?>">Redeem Coupon</a>
            </div>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Publikasi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url('publication/news');?>">Press Release</a>
              <a class="dropdown-item" href="<?php echo base_url('publication/gallery');?>">Galeri</a>
            </div>

          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              PPID
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url('ppid/index');?>">Tentang PPID</a>
              <a class="dropdown-item" href="<?php echo base_url('ppid/regulation');?>">Regulasi PPID</a>
              <a class="dropdown-item" href="<?php echo base_url('ppid/information');?>">Informasi</a>
              <a class="dropdown-item" href="<?php echo base_url('ppid/procedure');?>">Prosedur</a>
              <a class="dropdown-item" href="<?php echo base_url('ppid/register');?>">Daftar Register Pemohon</a>
            </div>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('career/index');?>">Karir</a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('faq/index');?>">FAQ</a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url('contact/index');?>">Kontak</a>
          </li>

        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>