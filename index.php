<?php
session_start();

$keyComponent = "bolafut";
$pageName = " ";

// Rute web
include __DIR__ . "/app/db/config.php";
// $conn = getConnection();
include __DIR__ . '/app/routes/Web.php';