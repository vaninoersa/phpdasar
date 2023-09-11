<?php
include 'connect.php';
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nik = $_POST['nik'];
    $nisn = $_POST['nisn'];

    $conn = new mysqli($servername, $username_db, $password_db, $databest_name);
    
    if ($conn->connect_error) {
        die("koneksi database gagal: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into admin (email, username, password, nik, nisn) values (?, ?, ?, ?,?)");
        $stmt->bind_param("sssss", $email, $username, md5($password) ,$nik, $nisn);
        $stmt->execute();
        header('location:login.php');
        $stmt->close();
        $conn->close(); 
    }
