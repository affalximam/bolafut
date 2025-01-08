<?php if (empty($keyComponent) OR $keyComponent != "bolafut") { header("Location: /"); } ?>

<nav class="navbar fixed-top">
    <div class="container-fluid">
        <?php if ($pageName == "tentang") : ?>
            <a href="/" class="navbar-brand">
                <i class="bi bi-chevron-double-left text-blue-303D57 font-size-2-0em"></i>
            </a>
        <?php endif; ?>
        <button id="global-navbar-toggler" class="navbar-toggler ms-auto border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-ellipsis-vertical fa-2x text-black"></i>
        </button>
    </div>
</nav>

<div id="global-navigation-top" class="global-navigation-top d-none bg-two position-fixed py-2 px-3 rounded rounded-2">
    <div class="row">
        <a href="/tentang" class="text-white text-decoration-none py-1 font-size-1-0rem">
            <i class="bi bi-info me-2"></i>
            Tentang Aplikasi
        </a>
        <a href="/pengelola-register" class="text-white text-decoration-none py-1 font-size-1-0rem">
            <i class="bi bi-person-circle me-2"></i>
            Daftar Sebagai Pihak Lapangan Futsal
        </a>
        <a href="/tentang" class="text-white text-decoration-none py-1 font-size-1-0rem">
            <i class="bi bi-android2 me-2"></i>
            Download Android App
        </a>
    </div>
</div>