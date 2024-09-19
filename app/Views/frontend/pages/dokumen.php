<?= $this->extend('frontend/template/layout') ?>
<?= $this->section('frontend') ?>

<section id="profile" class="profile section dark-background">
    <!-- <img src="assets/img/logokabij.jpg" alt="" data-aos="fade-in"> -->
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-xl-6 col-lg-8">
                <h1><b>DOKUMEN PUBLIKASI</b></h1>
                <p>Dokumentasi dan Publikasi Pemerintah Kabupaten Intan jaya</p>
            </div>
        </div>

        <!-- <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="300" style="cursor: pointer;" @click="showSejarah = !showSejarah">
                <div class="icon-box">
                    <i class="bi bi-binoculars"></i>
                    <h3>
                        <p>SEJARAH KABUPATEN INTAN JAYA</p>
                    </h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="400" style="cursor: pointer;" @click="showVisiMisi = !showVisiMisi">
                <div class="icon-box">
                    <i class="bi bi-bullseye"></i>
                    <h3><a href="#visimisi">VISI DAN MISI</a></h3>
                </div>
            </div>
            <div class="col-xl-4 col-md-4" data-aos="fade-up" data-aos-delay="500" style="cursor: pointer;" @click="showGambaranUmum = !showGambaranUmum">
                <div class="icon-box">
                    <i class="bi bi-fullscreen-exit"></i>
                    <h3><a href="#gambaranumum">GAMBARAN UMUM</a></h3>
                </div>

            </div>

        </div> -->

    </div>
</section>
<!-- Services Section -->
<section id="services" class="services section">



    <div class="container">

        <div class="row gy-4">
            <?php foreach ($doc as $item): ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-file-earmark-pdf text-danger"></i>
                        </div>
                        <a href="<?= base_url($item->file_dokumen) ?>" class="stretched-link">
                            <h3><?= $item->judul ?></h3>
                        </a>
                        <p><?= $item->konten ?></p>
                    </div>
                </div><!-- End Service Item -->
            <?php endforeach; ?>


        </div>

    </div>

</section><!-- /Services Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

    <img src="assets/img/cta-bg.jpg" alt="">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Call To Action</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Call To Action Section -->


<?= $this->endSection('frontend') ?>