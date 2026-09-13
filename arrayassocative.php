<?php
require_once('connection.php');
echo "<br><br>";

function arrayFromDatabase($koneksi) {
    $queryData = mysqli_query($koneksi, "SELECT * FROM tb_biodata_siswa");
    $proses = mysqli_fetch_all($queryData, MYSQLI_ASSOC);

    $urutan = 1;
    foreach($proses as $dataMentahProses) {
        echo "<b>Siswa Ke-$urutan:</b><br>";
        foreach($dataMentahProses as $columnProses => $valueProses) {
            echo "$columnProses : $valueProses" . "<br>";
        }
        echo "<hr>";
        $urutan++; 

    }
}

function latihanArrayScope() {
    $siswa = [
        [
            "nis" => 2001,
            "nama" => "Raffa",
            "jurusan" => "PPLG",
            "nilai" => 100 
        ],
        [
            "nis" => 2002,
            "nama" => "Anton",
            "jurusan" => "PPLG",
            "nilai" => 10
        ]
    ];

    $urutan = 1;
    foreach($siswa as $dataMentahSiswa) {
        echo "<b>Siswa Ke-$urutan:</b><br>"; 
        
        foreach($dataMentahSiswa as $tampilColumn => $valueSiswa) {
            echo "$tampilColumn : $valueSiswa" . "<br>";
        }
        echo "<br>";
        $urutan++; 
    }
}

echo "Array Manual: <hr>";
latihanArrayScope();

echo "Array Database: <hr>";
arrayFromDatabase($koneksi);

?>