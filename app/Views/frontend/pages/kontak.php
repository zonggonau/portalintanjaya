<?= $this->extend('frontend/template/layout') ?>
<?= $this->section('frontend') ?>


<section id="profile" class="profile section dark-background">
    <!-- <img src="assets/img/logokabij.jpg" alt="" data-aos="fade-in"> -->
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-xl-6 col-lg-8">
                <h1><b>KONTAK KAMI</b></h1>
                <p>Kontak Kami</p>
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
<!-- Contact Section -->
<section id="contact" class="contact section">



    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width: 100%; height: 270px;"></iframe> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d631268.0351485441!2d136.1186551075331!3d-3.4077215538261334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6818f38f5037b855%3A0x244b142fe55fd4ff!2sKabupaten%20Intan%20Jaya%2C%20Papua!5e1!3m2!1sid!2sid!4v1724825361686!5m2!1sid!2sid" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width: 100%; height: 570px;"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->

<?= $this->endSection('frontend') ?>