<?php

    require_once __DIR__ . "/../models/Users.php";
    require_once __DIR__ . "/../models/Lapangan.php";
    require_once __DIR__ . "/../models/Booking.php";

    date_default_timezone_set('Asia/Jakarta'); 

    if (!isset($_SESSION["users"])) {

        if($pageName == "pengelola-register") {

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(isset($_POST['pengelola_register'])) {

                    $users_name = $_POST['lapangan_name'];
                    $users_number = $_POST['lapangan_number'];
                    $users_email = $_POST['users_email'];
                    $users_password = $_POST['users_password'];
                    $users_role = "pengelola";
                    $users_status = "active";

                    $user = getUserByEmailAndNumber($users_email, $users_number);
                    if ($user === null) {
                        $registerAddUsersSuccess = registerAddUsers($users_name, $users_number, $users_email, $users_password,  $users_role, $users_status);
                        if($registerAddUsersSuccess == true){
                            $newUser = getUserByName($users_name);
                            
                            $lapangan_name = $users_name;
                            $Lapangan_alamat = $_POST['lapangan_alamat'];
                            $lapangan_owner_id = $newUser['users_id'];
                            $lapangan_open_hours = null;
                            $lapangan_close_hours = null;
                            $lapangan_profile_picture = "/assets/images/default-icon-lapangan.png";
                            $lapangan_status = "suspend";
                            $lapangan_number = $users_number;

                            $registerAddLapanganStatus = registerAddLapangan(
                                $lapangan_name,
                                $Lapangan_alamat,
                                $lapangan_owner_id,
                                $lapangan_open_hours,
                                $lapangan_close_hours,
                                $lapangan_profile_picture,
                                $lapangan_status,
                                $lapangan_number,
                            );

                            if($registerAddLapanganStatus == true){
                                $_SESSION['users'] = $newUser['users_id'];
                                if (!isset($_SESSION['register_sukses'])) {
                                    $_SESSION['register_sukses'] = [
                                        'icon' => 'success',
                                        'title' => 'Registrasi sukses',
                                    ];
                                }
                            } else {
                                $_SESSION['register_gagal'] = [
                                    'icon' => 'error',
                                    'title' => 'Register gagal',
                                    'text' => 'Users atau Lapangan sudah ada',
                                ];
                            }


                        }
                    } else {
                        
                    }
                    
                    
                }
            }

        }
        
    } elseif (isset($_SESSION["users"])) {

        if($users_role == "pelanggan") {

            if ($page == "booking") {
            
                $Lapangan = GetLapangan();
            
            } 
            
            elseif ($page == "booking-details"){
                
                if (!empty($_GET['lapangan_id'])) {

                    $idLapangan = isset($_GET['lapangan_id']) ? $_GET['lapangan_id'] : "";
                    $Lapangan = GetLapanganById($idLapangan);

                    if (!empty($Lapangan) && is_array($Lapangan)) {

                        $code = "";
                        if($Lapangan["lapangan_status"] == "active") {
                            $code = $code . "a";
                        } elseif($Lapangan["lapangan_status"] == "inactive") {
                            $code = $code . "i";
                        } elseif($Lapangan["lapangan_status"] == "suspend") {
                            $code = $code . "s";
                        }
    
                        if($Lapangan["lapangan_open_hours"] == null) {
                            $code = $code . "f";
                        } else {
                            $code = $code . "t";
                        }
    
                        if($Lapangan["lapangan_close_hours"] == null) {
                            $code = $code . "f";
                        } else {
                            $code = $code . "t";
                        }

                        if($code == "att"){
                            
                            $openHour = date('H', strtotime(htmlspecialchars($Lapangan['lapangan_open_hours'], ENT_QUOTES, "UTF-8")));
                            $closeHour = date('H', strtotime(htmlspecialchars($Lapangan['lapangan_close_hours'], ENT_QUOTES, "UTF-8")));
                        

                            $currentYear = date('Y');
                            $limitYear = 3;
                            $currentMonth = date('n');
                            $currentDate = date('j');

                            $months = [
                                1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                                5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                                9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                            ];
                            
                            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

                            for ($i = $openHour; $i < $closeHour; $i++) {

                            }
                        }                    
                    } else {
                        header("Location: /booking");
                        exit; 
                    }
                }
            }

        } elseif ($users_role == "pengelola") {

            if ($page == "booking") {
            
                $users_id = $_SESSION['users'];
                $Lapangan = GetLapanganByOwnerId($users_id);
                $code = "";

                if (!empty($Lapangan) && is_array($Lapangan)) {
                
                    if($Lapangan["lapangan_status"] == "active") {
                        $code = $code . "a";
                    } elseif($Lapangan["lapangan_status"] == "inactive") {
                        $code = $code . "i";
                    } elseif($Lapangan["lapangan_status"] == "suspend") {
                        $code = $code . "s";
                    }

                    if($Lapangan["lapangan_open_hours"] == null) {
                        $code = $code . "f";
                    } else {
                        $code = $code . "t";
                    }

                    if($Lapangan["lapangan_close_hours"] == null) {
                        $code = $code . "f";
                    } else {
                        $code = $code . "t";
                    }

                echo $code;

                    
                //     $openHour = date('H', strtotime(htmlspecialchars($Lapangan['lapangan_open_hours'], ENT_QUOTES, "UTF-8")));
                //     $closeHour = date('H', strtotime(htmlspecialchars($Lapangan['lapangan_close_hours'], ENT_QUOTES, "UTF-8")));
                //     $currentYear = date('Y');
                //     $limitYear = 3;
                //     $currentMonth = date('n');
                //     $currentDate = date('j');

                //     $months = [
                //         1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
                //         5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
                //         9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
                //     ];
                    
                //     $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);
                
                } 
            } 
        }
    }
    