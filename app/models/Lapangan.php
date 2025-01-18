<?php

    function lapangan() {
        $table = "lapangan";
        return $table;
    }

    function GetLapangan() {
        $table = lapangan();
        $conn = getConnection();

        $query = $conn->prepare("SELECT * FROM $table WHERE lapangan_status != 'suspend' AND lapangan_status != 'banned'");
        $query->execute();
        $result = $query->get_result();

        $Lapangan = [];
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $Lapangan[] = $row;
            }
        }

        return $Lapangan;
    }

    function GetLapanganById($idLapangan) {
        $table = lapangan();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM $table WHERE lapangan_id = ? AND lapangan_status != 'suspend' AND lapangan_status != 'banned' LIMIT 1");
        $stmt->bind_param("i", $idLapangan);
        $stmt->execute();
        $result = $stmt->get_result();

        $Lapangan = "";
        
        if ($result->num_rows > 0) {
            $Lapangan = $result->fetch_assoc();
        }

        return $Lapangan;
    }

    function GetLapanganByOwnerId($users_id) {
        $table = lapangan();
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM $table WHERE lapangan_owner_id = ? LIMIT 1");
        $stmt->bind_param("s", $users_id);
        $stmt->execute();
        $result = $stmt->get_result();

        $Lapangan = "";
        
        if ($result->num_rows > 0) {
            $Lapangan = $result->fetch_assoc();
        }

        return $Lapangan;
    }

    function registerAddLapangan(
            $lapangan_name,
            $Lapangan_alamat,
            $lapangan_owner_id,
            $lapangan_open_hours,
            $lapangan_close_hours,
            $lapangan_profile_picture,
            $lapangan_status,
            $lapangan_number
        )
            {
    
                $table = lapangan();
                $conn = getConnection();
            
                $query = "INSERT INTO $table (
                    lapangan_name,
                    Lapangan_alamat,
                    lapangan_owner_id,
                    lapangan_open_hours,
                    lapangan_close_hours,
                    lapangan_profile_picture,
                    lapangan_status,
                    lapangan_number
                )
                    VALUES 
                        (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssssss", 
                    $lapangan_name, 
                    $Lapangan_alamat, 
                    $lapangan_owner_id, 
                    $lapangan_open_hours, 
                    $lapangan_close_hours, 
                    $lapangan_profile_picture, 
                    $lapangan_status, 
                    $lapangan_number
                );
    
        if ($stmt->execute()) {
            $registerAddLapanganStatus = true;
        } else {
            $registerAddLapanganStatus = false;
        }

        $stmt->close();
        return $registerAddLapanganStatus;
    }