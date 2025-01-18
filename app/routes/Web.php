<?php

require __DIR__ . "/../controllers/SessionController.php";

$page = isset($_GET['page']) ? $_GET['page'] : "";

$pagesPath = "app/resource/pages/layout";
$pagesPathUsers = "app/resource/pages/layout/" . $users_role;

if (!isset($_SESSION["users"])) {
    
    switch ($page) {
        case "tentang":
            $pageName = "tentang";
            include $pagesPath . "/global/tentang.php";
            break;
    
        case "pengelola-register":
            $pageName = "pengelola-register";
            include __DIR__ . "/../controllers/LapanganContoller.php";
            include $pagesPath . "/global/pengelola-register.php";
            break;
            
        case "login":
            $pageName = "login";
            require __DIR__ . "/../controllers/AuthController.php";
            include $pagesPath . "/global/login.php";
            break;         
            
        default:
            $pageName = "splash";
            header("Refresh: 5; url=/login");
            include $pagesPath . "/global/splash.php";
            break;
    }
    
} else if (isset($_SESSION["users"])) {

    switch($users_role) {

        case "pelanggan":
            switch ($page) {
                case "tentang":
                    $pageName = "tentang";
                    include $pagesPath . "/global/tentang.php";
                    break;
            
                case "jadwal":
                    $pageName = "jadwal";
                    include __DIR__ . "/../controllers/BookingController.php";
                    include $pagesPathUsers . "/dashboard.jadwal.php";
                    break;

                case "jadwal-detail":
                    $pageName = "jadwal-detail";
                    include __DIR__ . "/../controllers/BookingController.php";
                    include $pagesPathUsers . "/jadwal.detail.php";
                    break;

                case "jadwal-riwayat":
                    $pageName = "jadwal-riwayat";
                    include __DIR__ . "/../controllers/BookingController.php";
                    include $pagesPathUsers . "/jadwal.riwayat.php";
                    break;
            
                case "booking":
                    $pageName = "booking";
                    include __DIR__ . "/../controllers/LapanganContoller.php";
                    include $pagesPathUsers . "/dashboard.booking.php";
                    break;
                    
                case "booking-details":
                    $pageName = "booking-details";
                    include __DIR__ . "/../controllers/LapanganContoller.php";
                    include __DIR__ . "/../controllers/BookingController.php";
                    include $pagesPathUsers . "/booking.php";
                    break;
            
                case "cari-lawan":
                    $pageName = "cari-lawan";
                    include $pagesPathUsers . "/dashboard.cari-lawan.php";
                    break;

                case "cari-lawan-detail":
                    $pageName = "cari-lawan-detail";
                    include $pagesPathUsers . "/cari-lawan.detail.php";
                    break;
            
                case "cari-lawan-tambah":
                    $pageName = "cari-lawan-tambah";
                    include $pagesPathUsers . "/cari-lawan.tambah.php";
                    break;
            
                case "event":
                    $pageName = "event";
                    include $pagesPathUsers . "/dashboard.event.php";
                    break;

                case "event-detail":
                    $pageName = "event-detail";
                    include $pagesPathUsers . "/event.detail.php";
                    break;
            
                case "admin":
                    $pageName = "admin";
                    include $pagesPathUsers . "/dashboard.admin.php";
                    break;
            
                case "search":
                    $pageName = "search";
                    include $pagesPathUsers . "/users.search.php";
                    break;

                case "settings":
                    $pageName = "settings";
                    include $pagesPathUsers . "/users.settings.php";
                    break;

                case "account":
                    $pageName = "account";
                    include $pagesPathUsers . "/users.account.php";
                    break;

                case "users-detail":
                    $pageName = "users-detail";
                    include $pagesPathUsers . "/users.detail.php";
                    break;

                case "logout":
                    $pageName = "logout";
                    logout();
                    break;
            
                default:
                    $pageName = "splash";
                    header("Refresh: 5; url=/jadwal");
                    include $pagesPath . "/global/splash.php";
                    break;
            }
        break;

        case "pengelola":

            switch ($page) {
                case "tentang":
                    $pageName = "tenang";
                    include $pagesPath . "/global/tentang.php";
                    break;
            
                case "jadwal":
                    $pageName = "jadwal";
                    include $pagesPathUsers . "/dashboard.jadwal.php";
                    break;
            
                case "booking":
                    $pageName = "booking";
                    include __DIR__ . "/../controllers/LapanganContoller.php";
                    include $pagesPathUsers . "/booking.php";
                    break;
            
                case "cari-lawan":
                    $pageName = "cari-lawan";
                    include $pagesPathUsers . "/dashboard.cari-lawan.php";
                    break;
            
                case "event":
                    $pageName = "event";
                    include $pagesPathUsers . "/dashboard.event.php";
                    break;
            
                case "admin":
                    $pageName = "admin";
                    include $pagesPathUsers . "/dashboard.admin.php";
                    break;
            
                case "search":
                    $pageName = "search";
                    include $pagesPathUsers . "/users.search.php";
                    break;
            
                default:
                    $pageName = "splash";
                    header("Refresh: 5; url=/jadwal");
                    include $pagesPath . "/global/splash.php";
                    break;
            }
    }
}