<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="<?php echo base_url();?>">
        <img class="logo-default" width="150px" height="40px" src="<?php echo base_url();?>/assets/images/logo.png" alt="logo"/>
        <img class="logo-white" width="200px" height="60px" src="<?php echo base_url();?>/assets/images/logo.png" alt="logo"/>
        <!-- <img class="logo-white" width="150px" height="50px" src="<?php echo base_url();?>/assets/images/logo_bumn.png" alt="logo"/> -->
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
              <a class="dropdown-item" href="<?php echo base_url('services/employee');?>">Angkutan Bus Karyawan</a>
              <a class="dropdown-item" href="<?php echo base_url('services/wisata');?>">Angkutan Bus Pariwisata</a>
              <a class="dropdown-item" href="<?php echo base_url('services/ads');?>">Ads Placement</a>
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
              <a class="dropdown-item" href="<?php echo base_url('ppid');?>">Tentang PPID</a>
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
<!--
End Fixed Navigation
==================================== -->