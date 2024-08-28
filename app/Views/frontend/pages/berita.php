<?= $this->extend('frontend/template/layout') ?>
<?= $this->section('frontend') ?>

<section id="profile" class="profile section dark-background">
    <!-- <img src="assets/img/logokabij.jpg" alt="" data-aos="fade-in"> -->
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-xl-6 col-lg-8">
                <h1><b>BERITA KABUPATEN INTAN JAYA</b></h1>
                <p>Berita terbaru dari Kabupaten Intan Jaya</p>
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

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card position-relative">
                    <!-- Background Image -->
                    <div class="blog-card-image" style="background-image: url('assets/img/apel.jpeg');"></div>
                    <!-- Blog Content -->
                    <div class="blog-card-content">
                        <a href="blog-details.html" class="stretched-link">
                            <h3>Blog Post Title</h3>
                        </a>
                        <p class="blog-date bi">August 28, 2024</p>
                        <p class="blog-excerpt">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-facebook"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-twitter"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div><!-- End Blog Card -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card position-relative">
                    <!-- Background Image -->
                    <div class="blog-card-image" style="background-image: url('assets/img/apel.jpeg');"></div>
                    <!-- Blog Content -->
                    <div class="blog-card-content">
                        <a href="blog-details.html" class="stretched-link">
                            <h3>Blog Post Title</h3>
                        </a>
                        <p class="blog-date bi">August 28, 2024</p>
                        <p class="blog-excerpt">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-facebook"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-twitter"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div><!-- End Blog Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="blog-card position-relative">
                    <!-- Background Image -->
                    <div class="blog-card-image" style="background-image: url('assets/img/apel.jpeg');"></div>
                    <!-- Blog Content -->
                    <div class="blog-card-content">
                        <a href="blog-details.html" class="stretched-link">
                            <h3>Blog Post Title</h3>
                        </a>
                        <p class="blog-date bi">August 28, 2024</p>
                        <p class="blog-excerpt">Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-facebook"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-twitter"></i></a>&nbsp;&nbsp;&nbsp;
                        <a href="#" class="share-link" style="font-size: 25px;"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div><!-- End Blog Card -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Eosle Commodi</h3>
                    </a>
                    <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                </div>
            </div>


            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Ledo Markt</h3>
                    </a>
                    <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-facebook"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Asperiores Commodit</h3>
                    </a>
                    <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-calendar4-week"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Velit Doloremque</h3>
                    </a>
                    <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="bi bi-chat-square-text"></i>
                    </div>
                    <a href="service-details.html" class="stretched-link">
                        <h3>Dolori Architecto</h3>
                    </a>
                    <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
                    <a href="service-details.html" class="stretched-link"></a>
                </div>
            </div><!-- End Service Item -->

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