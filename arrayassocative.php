<?php
require_once('connection.php');
echo "<br>";
echo "<br>";
function arrayFromDatabase() {
global $koneksi;

$queryData = mysqli_query($koneksi, "SELECT * FROM tb_biodata_siswa");

$proses = mysqli_fetch_all($queryData, MYSQLI_ASSOC);

foreach($proses as $rowData) {
    echo "<br>";
    echo "ID: " . $rowData['id'] . "<br>";
    echo "Nama Siswa: " . $rowData['nama_siswa'] . "<br>";
    echo "Jurusan: " . $rowData['jurusan'] . "<br>";
    echo "Kelas: " . $rowData['kelas'] . "<br>";
    echo "---------------";
}
}

function latihanArrayScope() {
    $siswa = [[
    "nis" => 2001,
    "nama" => "Raffa",
    "jurusan" => "PPLG",
    "nilai" => 100 
]
,
[
    "nis" => 2002,
    "nama" => "Anton",
    "jurusan" => "PPLG",
    "nilai" => 10
]
];

foreach($siswa as $tampilSiswa) {
    echo "NIS: " . $tampilSiswa["nis"] . "<br>";
    echo "Nama: " . $tampilSiswa["nama"] . "<br>";
    echo "Jurusan: " . $tampilSiswa["jurusan"] . "<br>";
    echo "Nilai: " . $tampilSiswa["nilai"] . "<br>";
    echo "--------------- <br>";
}
}

echo "Array Manual: <br> --------------- <br>";
latihanArrayScope();
echo "<br>";
echo "Array Database: <br> ---------------";
arrayFromDatabase();

?>