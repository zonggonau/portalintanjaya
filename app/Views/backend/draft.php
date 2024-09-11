<?= $this->extend('backend/template/layout') ?>
<?= $this->section('backend') ?>

<div class="container mt-5">
    <div class=" row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1"><?= $news->judul ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2"><?= $news->created_at ?></div>
                    <!-- Post categories-->
                    <!-- <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a> -->
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="<?= base_url($news->thumbnail) ?>" alt="..." /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p>
                        <?= $news->konten; ?>
                    </p>
                </section>
            </article>
            <!-- Comments section-->

        </div>
    </div>
</div>

<?= $this->endSection('backend') ?>