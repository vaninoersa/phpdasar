<?php 
$servername = "localhost:3306";
$username_db ="root";
$password_db ="";
$username ="db_sekolah";

$conn = new mysqli($servername, $username_db, $password_db, $username);
if ($conn->connect_error) {
    die("koneksi database gagal; " .$conn->connect_error);}
?>