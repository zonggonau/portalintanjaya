<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PEMDA INTAN JAYA</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/img/logokabij.png') ?>" rel="icon">
    <!-- <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/main.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">


</head>

<body class="index-page">

    <?= $this->include('frontend/config/navbar') ?>

    <main class="main">
        <?= $this->renderSection('frontend') ?>
    </main>

    <?= $this->include('frontend/config/footer') ?>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('fetchLeaders', () => ({
                leaders: [],
                loading: true,

                async init() {
                    try {
                        const response = await fetch('/assets/json/leaders.json');
                        if (!response.ok) throw new Error('Failed to fetch');
                        const data = await response.json();
                        this.leaders = data.leaders;
                    } catch (error) {
                        console.error('Error fetching JSON:', error);
                    } finally {
                        this.loading = false;
                    }
                }
            }));
        });
    </script>

</body>

</html>