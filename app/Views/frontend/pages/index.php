<?= $this->extend('frontend/template/layout') ?>
<?= $this->section('frontend') ?>



<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <!-- <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

    <div class="item active" style="position: absolute;  overflow: hidden;">
        <video controls autoplay loop>
            <source src="<?= base_url('assets/video/profile.mp4') ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="pateren"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
            <!-- <div class="col-xl-12">
                <img src="assets/img/logokabij.png" class="img-fluid" style="width: 200px; height: 200px;" alt="">
            </div> -->
            <div class="col-xl-6 col-lg-8">
                <h3><b>WEBSITE RESMI PEMERINTAH</b></h3>
                <h1><b>KABUPATEN INTAN JAYA</b></h1>
                <p class="font-weight-bold">"Ondoma dangge inia hainggia duadia"</p>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                    <i class="bi bi-binoculars"></i>
                    <h3><a href="#portfolio">PENGUMUMAN</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                    <i class="bi bi-bullseye"></i>
                    <h3><a href="">TRANSPARANSI ANGGARAN</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                    <i class="bi bi-fullscreen-exit"></i>
                    <h3><a href="">PRODUK HUKUM</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                    <i class="bi bi-card-list"></i>
                    <h3><a href="">E-GOVERMENT</a></h3>
                </div>
            </div>
            <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                <div class="icon-box">
                    <i class="bi bi-gem"></i>
                    <h3><a href="">GALERI</a></h3>
                </div>
            </div>
        </div>

    </div>

</section><!-- /Hero Section -->







<?= $this->endSection('frontend') ?>