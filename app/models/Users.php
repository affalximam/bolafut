<?php

    function getUserByWhatsAppOrEmail($username) {
        $table = "users";
        $conn = getConnection();

        $query = $conn->prepare("SELECT * FROM $table WHERE users_email = ? OR users_number = ? LIMIT 1");
        $query->bind_param('si', $username, $username);
        $query->execute();
        $result = $query->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    function getUserByEmailAndNumber($users_email, $users_number) {
        $table = "users";
        $conn = getConnection();

        $query = $conn->prepare("SELECT * FROM $table WHERE users_email = ? OR users_number = ? LIMIT 1");
        $query->bind_param('si', $users_email, $users_number);
        $query->execute();
        $result = $query->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function getUserById($users_id) {
        $table = "users";
        $conn = getConnection();

        $query = $conn->prepare("SELECT * FROM $table WHERE users_id = ? LIMIT 1");
        $query->bind_param('i', $users_id);
        $query->execute();
        $result = $query->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function getUserByName($users_name) {
        $table = "users";
        $conn = getConnection();

        $query = $conn->prepare("SELECT * FROM $table WHERE users_name = ? LIMIT 1");
        $query->bind_param('s', $users_name);
        $query->execute();
        $result = $query->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }

    function registerAddUsers($users_name, $users_number, $users_email, $users_password,  $users_role, $users_status) { 
        $table = "users";
        $conn = getConnection();
    
        $hashed_password = password_hash($users_password, PASSWORD_BCRYPT);
    
        $query = "INSERT INTO $table (users_name, users_number, users_email, users_password, users_role, users_status) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sissss", $users_name, $users_number, $users_email, $hashed_password, $users_role, $users_status);
    
        if ($stmt->execute()) {
            $registerAddUsersSuccess = true;
        } else {
            $registerAddUsersSuccess = false;
        }

        $stmt->close();
        return $registerAddUsersSuccess;
    }