<?php 
session_start(); // Memulai sesi PHP

if (isset($_GET["id"])) { // Memeriksa apakah parameter 'id' ada dalam URL
    $id = $_GET['id']; // Mengambil nilai 'id' dari parameter URL
    unset($_SESSION['data_barang'][$id]); // Menghapus elemen dari array 'data_barang' dalam sesi berdasarkan 'id'
    header("Location: index.php"); // Mengarahkan browser ke halaman 'index.php'
    exit; // Menghentikan eksekusi skrip
}

?>