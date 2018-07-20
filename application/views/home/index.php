<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agency - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url(); ?>assets/frontend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
<<<<<<< HEAD
            <?php if ($this->session->userdata('level') == 'admin') { ?> 
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Admin Panel</a>
            </li>
            <?php } ?>
=======
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Kamar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
            </li>
<<<<<<< HEAD
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Lokasi</a>
            </li> -->
=======
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Lokasi</a>
            </li>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    <!-- Kamar Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Kamar</h2>
            <h3 class="section-subheading text-muted">Model Kamar Hotel.</h3>
          </div>
        </div>
        <div class="row">
        <?php foreach($semua_kamar as $kamar) { ?>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#modal<?php echo $kamar['id_kamar']; ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/portfolio/<?php echo $kamar['gambar_kamar']; ?>" alt="">
            </a>
            <div class="portfolio-caption">
              <h4><?php echo $kamar['nama_kamar']; ?></h4>
              <p class="text-muted"><?php echo "Rp " . number_format($kamar['harga_sewa'], 2, ',', '.'); ?></p>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
<<<<<<< HEAD
            <h2 class="section-heading text-uppercase">Tentang</h2>
=======
            <h2 class="section-heading text-uppercase">About</h2>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
            <h3 class="section-subheading text-muted">Sejarah Hotel</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
<<<<<<< HEAD
                    <h4>Sejarah Berdirinya</h4>
                    <h4 class="subheading">Hotel Trio Indah</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Hotel Trio Indah berdiri sejak tahun 2009. Hotel ini didirikan oleh orang luar negeri yang singgah di Indonesia, di tahun itu.</p>
=======
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
<<<<<<< HEAD
                    <h4>Lokasi</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lokasi bertempat di Jl.Bunga Indah Kota Semarang Indonesia</p>
=======
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
<<<<<<< HEAD
                    <h4>Peraturan Tamu Hotel</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Tamu hotel harus mematuhi beberapa peraturan yaitu :</p>
                    <br class="text-muted">1. Tidak boleh merokok di dalam kamar </br>
                    <br class="text-muted">2. Menjaga kebersihan</br>
                    <br class="text-muted">3. Tidak boleh membawa hewan peliharaan</br>
=======
                    <h4>December 2012</h4>
                    <h4 class="subheading">Transition to Full Service</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets/frontend/img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>July 2014</h4>
                    <h4 class="subheading">Phase Two Expansion</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
<<<<<<< HEAD
                <a href="<?php echo base_url(); ?>index.php/login/logout" align="right">
                <div class="timeline-image">
                 
                </div></a>
=======
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section>

    <!-- Contact -->
<<<<<<< HEAD
   <!--  <section id="contact">
=======
    <section id="contact">
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Location</h2>
            <h3 class="section-subheading text-muted">Lokasi Hotel</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
<<<<<<< HEAD
                  <div id="success"></div> -->
=======
                  <div id="success"></div>
>>>>>>> 1dfd3aeb7a63d82c687477918f7a19224d0f5a59
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Kelompok 8 (Januareta & Khuswatun)</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <?php foreach($semua_kamar as $kamar) { ?>
    <div class="portfolio-modal modal fade" id="modal<?php echo $kamar['id_kamar']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase"><?php echo $kamar['nama_kamar']; ?></h2>
                  <p class="item-intro text-muted"><?php echo "Rp " . number_format($kamar['harga_sewa'], 2, ',', '.'); ?></p>
                  <img class="img-fluid d-block mx-auto" src="<?php echo base_url(); ?>assets/frontend/img/portfolio/<?php echo $kamar['gambar_kamar']; ?>" alt="">
                  <p><?php echo $kamar['fasilitas']; ?></p>
                  <hr>
                  <h4 class="text-left">Biodata Tamu</h4>
                  <?php echo form_open('home/register'); ?>
                  <input type="hidden" name="id_kamar" value="<?php echo $kamar['id_kamar']; ?>">
                  <div class="from-group mb-3">
                    <input type="text" name="nama_tamu" class="form-control" required="required" placeholder="Nama Lengkap">
                  </div>
                  <div class="from-group mb-3">
                    <select name="jenis_kelamin" class="form-control" required="required">
                      <option value="L" selected="selected">Laki-laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="from-group mb-3">
                    <input type="text" name="warganegara" class="form-control" required="required" placeholder="Warganegara">
                  </div>
                  <div class="from-group mb-3">
                    <textarea name="alamat" class="form-control" required="required" rows="5" placeholder="Alamat"></textarea>
                  </div>
                  <div class="from-group mb-3">
                    <input type="text" name="telepon" class="form-control" required="required" placeholder="Telepon">
                  </div>
                  <h4 class="text-left">Reservasi</h4>
                  <div class="from-group mb-3">
                    <input type="date" name="tgl_cekin" class="form-control" required="required" placeholder="Tanggal Masuk">
                  </div>
                  <div class="from-group mb-3">
                    <input type="date" name="tgl_cekout" class="form-control" required="required" placeholder="Tanggal Keluar">
                  </div>
                  <button class="btn btn-success mb-3" type="submit">
                    Kirim</button>
                  <button class="btn btn-danger mb-3" data-dismiss="modal" type="button">
                    Batal</button>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/agency.min.js"></script>

  </body>

</html>
