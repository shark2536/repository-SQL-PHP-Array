<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "siswa_db";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$koneksi = mysqli_connect($host, $user, $password, $db);

if ($koneksi) {
    echo "<h1 style='color: green'>Sukses!</h1>";
    echo "Koneksi Berhasil Terhubung ke Database: " . $db;
} else {
    echo "Koneksi Gagal!";
}