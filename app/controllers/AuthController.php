<?php

require_once __DIR__ . "/../models/Users.php";

    switch ($pageName) {
        case "login":

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(isset($_POST['login'])) {

                    $username = $_POST['username'];
                    $password = $_POST['password'];
        
                    $user = getUserByWhatsAppOrEmail($username);

                    if ($user && password_verify($password, $user['users_password'])) {
                        $_SESSION['users'] = $user['users_id'];
                        header("Location: /jadwal");
                        exit;
                    } else {
                        if (!isset($_SESSION['login_gagal'])) {
                            $_SESSION['login_gagal'] = [
                                'icon' => 'error',
                                'title' => 'Login Gagal',
                                'text' => 'username dan Password salah'
                            ];
                        }
                    }
                } else if (isset($_POST['register'])) {
                    $users_name = $_POST['users_name'];
                    $users_number = $_POST['users_number'];
                    $users_email = $_POST['users_email'];
                    $users_password = $_POST['users_password'];
                    $users_role = "pelanggan";
                    $users_status = "active";

                    $user = getUserByEmailAndNumber($users_email, $users_number);
                    if ($user === null) {
                        $registerAddUsersSuccess = registerAddUsers($users_name, $users_number, $users_email, $users_password,  $users_role, $users_status);
                        if($registerAddUsersSuccess == true){
                            $newUser = getUserByName($users_name);
                            $_SESSION['users'] = $newUser['users_id'];
                            if (!isset($_SESSION['register_sukses'])) {
                                $_SESSION['register_sukses'] = [
                                    'icon' => 'success',
                                    'title' => 'Registrasi sukses',
                                ];
                            }
                        }
                    } else {
                        if (!isset($_SESSION['register_gagal'])) {
                            $_SESSION['register_gagal'] = [
                                'icon' => 'error',
                                'title' => 'Register gagal',
                                'text' => 'users sudah ada',
                            ];
                        }
                    }
                }
            }    
            break;
        
        default:
        
        break;
    }