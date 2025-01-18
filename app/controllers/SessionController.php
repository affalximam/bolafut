<?php

require_once __DIR__ . "/../models/Users.php";


    if (isset($_SESSION["users"])) {
        $users_id = $_SESSION["users"];

        $user = getUserById($users_id);
        $users_role = $user['users_role'];


    } else {
        $users_role = "";
    }

    function logout() {
        session_unset();
        session_destroy();
        header("Location: /login");
        exit;
    }