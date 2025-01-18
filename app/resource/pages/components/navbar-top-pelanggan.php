
<nav class="navbar navbar-top fixed-top bg-two">
    <div class="container-fluid">
        <h1 class="navbar-brand text-white pt-sans-bold">
            BOLAFUT
        </h1>
        <div class="nav-right">
            <a href="/search" id="pelanggan-navbar-search" class="navbar-toggler ms-auto border-0">
                <i class="fa-solid fa-magnifying-glass font-size-1-5em text-white"></i>
            </a>
            <button id="pelanggan-navbar-toggler" class="navbar-toggler ms-auto border-0" type="button">
                <i class="fa-solid fa-ellipsis-vertical fa-2x text-white"></i>
            </button>
        </div>
    </div>
</nav>

<div id="pelanggan-navigation-top"
    class="pelanggan-navigation-top d-none bg-two  position-fixed py-2 px-3 rounded rounded-2">
    <div class="row">
        <?php if ($pageName == "jadwal") : ?>
            <a href="/jadwal-riwayat" class="text-white text-decoration-none py-1 font-size-1-2rem pt-sans-bold">
                <i class="bi bi-clock-history me-2"></i>
                Riwayat
            </a>
        <?php endif; ?>
        <?php if ($pageName == "cari-lawan") : ?>
            <a href="/cari-lawan-tambah" class="text-white text-decoration-none py-1 font-size-1-2rem pt-sans-bold">
                <i class="bi bi-plus-square me-2"></i>
                Cari Lawan
            </a>
        <?php endif; ?>
        <a href="/settings" class="text-white text-decoration-none py-1 font-size-1-2rem pt-sans-bold">
            <i class="bi bi-gear-fill me-2"></i>
            Pengaturan
        </a>
        <a href="/account" class="text-white text-decoration-none py-1 font-size-1-2rem pt-sans-bold">
            <i class="bi bi-person-circle me-2"></i>
            Akun
        </a>
        <a href="/tentang" class="text-white text-decoration-none py-1 font-size-1-2rem pt-sans-bold">
            <i class="bi bi-info me-2"></i>
            Tentang Aplikasi
        </a>
    </div>
</div>