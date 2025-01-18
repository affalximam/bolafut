<?php

    require_once __DIR__ . "/../models/Users.php";
    require_once __DIR__ . "/../models/Booking.php";
    require_once __DIR__ . "/../models/Lapangan.php";

    date_default_timezone_set('Asia/Jakarta'); 

    if (isset($_SESSION["users"])) {

        if($users_role == "pelanggan") {

            switch ($pageName) {

                case "jadwal":

                    $Booking = GetBookingByUsersId($users_id);

                    usort($Booking, function ($a, $b) {
                        return strtotime($a['booking_time_start']) - strtotime($b['booking_time_start']);
                    });

                    $Jadwal = [];
                    foreach ($Booking as $index => $value) {
                        if($value["booking_status"] == "on_schedule") {

                            $current_time = date('Y-m-d H:i:s'); 
                            $stored_booking_time_end = $value['booking_time_end']; 

                            if (strtotime($stored_booking_time_end) < strtotime($current_time)) {
                                $stored_booking_id = $value['booking_id'];
                                SetJadwalToHistory($stored_booking_id, $stored_booking_time_end);

                            } else {

                                $idLapangan = $value["booking_lapangan_id"];
                                $Lapangan = GetLapanganById($idLapangan);

                                $Jadwal[] = [
                                    'Lapangan' => $Lapangan,
                                    'Booking' => $value
                                ];

                            }
                        }
                    }
                    break;

                case "jadwal-detail":
                    $Booking = GetBookingByUsersId($users_id);
                    $idBooking = isset($_GET['id_booking']) ? $_GET['id_booking'] : "";

                    $Jadwal = [];
                    foreach ($Booking as $index => $value) {
                        if($value["booking_status"] == "on_schedule" AND $value["booking_id"] == $idBooking) {
                            
                            $idLapangan = $value["booking_lapangan_id"];
                            $Lapangan = GetLapanganById($idLapangan);

                            $Jadwal[] = [
                                'Lapangan' => $Lapangan,
                                'Booking' => $value
                            ];

                        }
                    }
                    break;

                case "jadwal-riwayat":
                    $Booking = GetBookingByUsersId($users_id);

                    usort($Booking, function ($b, $a) {
                        return strtotime($a['booking_updated_at']) - strtotime($b['booking_updated_at']);
                    });

                    $History = [];
                    foreach ($Booking as $index => $value) {
                        if($value["booking_status"] == "history") {

                            $idLapangan = $value["booking_lapangan_id"];
                            $Lapangan = GetLapanganById($idLapangan);

                            $Jadwal[] = [
                                'Lapangan' => $Lapangan,
                                'Booking' => $value
                            ];
                        }
                    }
                    break;

                case "booking-details":

                    if ($_SERVER["REQUEST_METHOD"] === "POST"){
                        if(isset($_POST['booking_add'])) {
                            $booking_type = "individu";
                            $booking_lapangan_id = isset($_GET['lapangan_id']) ? $_GET['lapangan_id'] : "";
                            $booking_source = $users_role;
                            $booking_users_id = $users_id;
                            $booking_name = $_POST['booking_name'];

                            $booking_year = $_POST['booking_year'];
                            $booking_month = $_POST['booking_month'];
                            $booking_day = $_POST['booking_day'];
                            $booking_hours = $_POST['booking_hours'];
                            $booking_duration = $_POST['booking_duration'];

                            $booking_status = "on_schedule";
                            $bookingProcessStatus = 1;
                            $insertBookingStatus = 1;

                            for($i = 0; $i < $booking_duration; $i++) {

                                $booking_time_start = $booking_year . "-" . str_pad($booking_month, 2, "0", STR_PAD_LEFT) . "-" . str_pad($booking_day, 2, "0", STR_PAD_LEFT) . " " . str_pad($booking_hours + $i, 2, "0", STR_PAD_LEFT) . ":00:00";
                                $booking_time_end = $booking_year . "-" . str_pad($booking_month, 2, "0", STR_PAD_LEFT) . "-" . str_pad($booking_day, 2, "0", STR_PAD_LEFT) . " " . str_pad($booking_hours + $i, 2, "0", STR_PAD_LEFT) . ":59:59";

                                $bookingProcess = CekBookingByTimeAndLapanganid($booking_lapangan_id,  $booking_time_start);
                                $bookingProcessStatus = $bookingProcessStatus * $bookingProcess;

                            }

                            if($bookingProcessStatus == 1){
                                for($i = 0; $i < $booking_duration; $i++) {

                                    $booking_time_start = $booking_year . "-" . str_pad($booking_month, 2, "0", STR_PAD_LEFT) . "-" . str_pad($booking_day, 2, "0", STR_PAD_LEFT) . " " . str_pad($booking_hours + $i, 2, "0", STR_PAD_LEFT) . ":00:00";
                                    $booking_time_end = $booking_year . "-" . str_pad($booking_month, 2, "0", STR_PAD_LEFT) . "-" . str_pad($booking_day, 2, "0", STR_PAD_LEFT) . " " . str_pad($booking_hours + $i, 2, "0", STR_PAD_LEFT) . ":59:59";

                                    $insertBooking = InsertBooking($booking_type, $booking_lapangan_id, $booking_source, $booking_users_id, $booking_name,  $booking_time_start, $booking_time_end, $booking_status);
                                    $insertBookingStatus = $insertBookingStatus * $insertBooking;
                                }
                            } else {
                                if (!isset($_SESSION['lapangan_isi'])) {
                                    $_SESSION['lapangan_isi'] = [
                                        'icon' => 'error',
                                        'title' => 'Gagal',
                                        'text' => 'Lapangan Isi',
                                    ];
                                }
                            }

                            if ($insertBookingStatus == 1) {
                                if (!isset($_SESSION['booking_sukses'])) {
                                    $_SESSION['booking_sukses'] = [
                                        'icon' => 'success',
                                        'title' => 'Booking sukses',
                                    ];
                                }
                            } else {
                                if (!isset($_SESSION['booking_gagal'])) {
                                    $_SESSION['booking_gagal'] = [
                                        'icon' => 'error',
                                        'title' => 'Gagal',
                                        'text' => 'Silahkan Coba lagi',
                                    ];
                                }
                            }
                        }
                    }

                break;
            }

        }

    }