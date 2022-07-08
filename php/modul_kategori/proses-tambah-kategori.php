<?php
session_start();

include '../connection.php';

$kategori = $_POST['kategori'];

$query = "INSERT INTO kategori (kategori_nama) 
    VALUES ('$kategori')";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: list-kategori.php');
} else {
    header('Location: tambah-kategori.php');
}
