<?= $this->extend('frontend/template/layout') ?>
<?= $this->section('frontend') ?>
<section id="profile" class="profile section dark-background">
    <img src="<?= base_url($info->thumbnail) ?>" alt="" data-aos="fade-in">
    <div class="container">
        <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">

            <div class="col-xl-6 col-lg-8">
                <h1><b><?= $info->nama_kategori ?></b></h1>
                <p>Berita terbaru dari Kabupaten Intan Jaya</p>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5">
    <div class=" row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1"><?= $info->judul ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2"><?= $info->publish_date ?></div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="<?= base_url($info->thumbnail) ?>" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p>
                        <?= $info->konten; ?>
                    </p>
                </section>
            </article>
            <!-- Comments section-->

        </div>

        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Web Design</a></li>
                                <li><a href="#!">HTML</a></li>
                                <li><a href="#!">Freebies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">JavaScript</a></li>
                                <li><a href="#!">CSS</a></li>
                                <li><a href="#!">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('frontend') ?>