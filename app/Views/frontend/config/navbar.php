<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="<?= base_url("assets/img/logokabij.png") ?>" alt="" width="50" height="50">
            <h1 class="sitename">INTANJAYA</h1>
            <!-- <span>.</span> -->
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="/" class="<?= ($_SERVER['REQUEST_URI'] == '/') ? 'active' : '' ?>">HOME</a></li>
                <li><a href="/profile" class="<?= ($_SERVER['REQUEST_URI'] == '/profile') ? 'active' : '' ?>">PROFILE</a></li>
                <li><a href="/dokumen" class="<?= ($_SERVER['REQUEST_URI'] == '/dokumen') ? 'active' : '' ?>">DOKUMEN PUBLIKASI</a></li>
                <li><a href="/egov" class="<?= ($_SERVER['REQUEST_URI'] == '/egov') ? 'active' : '' ?>">E-GOVERMENT</a></li>
                <li><a href="/berita" class="<?= ($_SERVER['REQUEST_URI'] == '/berita') ? 'active' : '' ?>">BERITA</a></li>
                <li><a href="/galeri" class="<?= ($_SERVER['REQUEST_URI'] == '/galeri') ? 'active' : '' ?>">GALERI</a></li>
                <li><a href="/kontak" class="<?= ($_SERVER['REQUEST_URI'] == '/kontak') ? 'active' : '' ?>">KONTAK</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <!-- <a class="btn-getstarted" href="index.html#about">Get Started</a> -->

    </div>
</header>