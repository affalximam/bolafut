<?php 

    function booking() {
        $booking = "booking";
        return $booking;
    }

    function GetBookingByUsersId($users_id) {
        $table = booking();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM $table WHERE booking_users_id = ?");
        $stmt->bind_param("s", $users_id);
        $stmt->execute();
        $result = $stmt->get_result();

        $Booking = [];
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $Booking[] = $row;
            }
        }

        return $Booking;
    }

    function CekBookingByTimeAndLapanganid($booking_lapangan_id,  $booking_time_start){
        $table = booking();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM $table WHERE booking_lapangan_id = ? AND booking_time_start = ?");
        $stmt->bind_param("ss", $booking_lapangan_id, $booking_time_start);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $bookingProcess = 1;
        if ($result->num_rows > 0) {
            $bookingProcess = 0;
        } else {
            $bookingProcess = 1;
        }
        return $bookingProcess;
    }

    function InsertBooking($booking_type, $booking_lapangan_id, $booking_source, $booking_users_id, $booking_name,  $booking_time_start, $booking_time_end, $booking_status){
        $table = booking();
        $conn = getConnection();

        $query = "INSERT INTO $table
                        (
                            booking_type,
                            booking_lapangan_id,
                            booking_source,
                            booking_users_id,
                            booking_name,
                            booking_time_start,
                            booking_time_end,
                            booking_status
                        )
                    VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssssss", $booking_type, $booking_lapangan_id, $booking_source, $booking_users_id, $booking_name,  $booking_time_start, $booking_time_end, $booking_status);

        if ($stmt->execute()) {
            $insertBooking = 1;
        } else {
            $insertBooking = 0;
        }

        $stmt->close();
        return $insertBooking;
    }

    function SetJadwalToHistory($stored_booking_id, $stored_booking_time_end){
        $table = booking();
        $conn = getConnection();
        
        $booking_status = "history";

        $query = "UPDATE $table SET booking_status = ?, booking_updated_at = ? WHERE booking_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssi", $booking_status, $stored_booking_time_end, $stored_booking_id);
        $stmt->execute();
        $stmt->close();

    }