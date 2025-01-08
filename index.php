<?php
    session_start();

    $keyComponent = "bolafut";
    $pageName = " ";
    $page = isset($_GET['page']) ? $_GET['page'] : "";

    if (!isset($_SESSION["users"])) {
        if ($page == "tentang" ) {
            $pageName = "tentang";
            include __DIR__ . "/app/pages/layout/global/tentang.php";
        } else if ($page == "pengelola-register" ) {
            $pageName = "pengelola-register";
            include __DIR__ . "/app/pages/layout/global/pengelola-register.php";
        } else {
            $pageName = "globak-login";
            include __DIR__ . "/app/pages/layout/global/login.php";
            exit;
        }
        
    }
