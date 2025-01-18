<?php

    function getConnection() {

        $config = require __DIR__ . '/bolafut.php';

        $dbHost = $config['db_host'];
        $dbUsername = $config['db_username'];
        $dbPassword = $config['db_password'];
        $dbName = $config['db_name'];
        $dbPort = $config['db_port'];

        $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        return $conn;
    }
    