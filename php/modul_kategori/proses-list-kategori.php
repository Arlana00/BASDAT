<?php
session_start();

include '../connection.php';

$query = "SELECT * FROM kategori";

$hasil = mysqli_query($db, $query);

// ... menampung semua data kategori
$data_kategori = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_kategori
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_kategori[] = $row;
}


// ... lanjut di tampilan
