
<nav class="navbar navbar-bottom-pengelola fixed-bottom bg-two pb-3">
    <div class="container-fluid p-0">
        <div class="d-flex justify-content-around w-100 text-center m-0 text-white">
            <a href="/jadwal" class="navbar-bottom-url text-decoration-none text-white cursor-pointer opacity-50 <?php if ($pageName == "jadwal") { echo 'active'; } ?>">
                <div class="icons rounded rounded-3 text-center align-items-center d-flex justify-content-center">
                    <i class="fa-solid fa-futbol"></i>
                </div>
                <p class="mb-0 pb-0 pt-sans-bold">Jadwal</p>
            </a>
            <a href="/booking" class="navbar-bottom-url text-decoration-none text-white cursor-pointer opacity-50 <?php if ($pageName == "booking") { echo 'active'; } ?>">
                <div class="icons rounded rounded-3 text-center align-items-center d-flex justify-content-center">
                    <i class="court-futbol"></i>
                </div>
                <p class="mb-0 pb-0 pt-sans-bold">Booking</p>
            </a>
            <a href="/cari-lawan" class="navbar-bottom-url text-decoration-none text-white cursor-pointer opacity-50 <?php if ($pageName == "cari-lawan") { echo 'active'; } ?>">
                <div class="icons rounded rounded-3 text-center align-items-center d-flex justify-content-center">
                    <i class="vs"></i>
                </div>
                <p class="mb-0 pb-0 pt-sans-bold">Cari Lawan</p>
            </a>
            <a href="/event" class="navbar-bottom-url text-decoration-none text-white cursor-pointer opacity-50 <?php if ($pageName == "event") { echo 'active'; } ?>">
                <div class="icons rounded rounded-3 text-center align-items-center d-flex justify-content-center">
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <p class="mb-0 pb-0 pt-sans-bold">Event</p>
            </a>
            <a href="/admin" class="navbar-bottom-url text-decoration-none text-white cursor-pointer opacity-50 <?php if ($pageName == "admin") { echo 'active'; } ?>">
                <div class="icons rounded rounded-3 text-center align-items-center d-flex justify-content-center">
                    <i class="bi bi-person-circle"></i>
                </div>
                <p class="mb-0 pb-0 pt-sans-bold">Admin</p>
            </a>
        </div>
    </div>
</nav>
