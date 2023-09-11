<?php
    $servername = "localhost:3306";
    $username_db = "root";
    $password_db = "";
    $databest_name = "db_sekolah";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli($servername, $username_db, $password_db, $databest_name);
    
    if ($conn->connect_error) {
        die("koneksi database gagal: " . $conn->connect_error);
    } else {
        $stmp = $conn->prepare("insert into admin (email, username, password) values (?, ?, ?)");
        $stmp->bind_param("sss", $email, $username, $password);
        $stmp->execute();
        echo "regristrasi berhasil";
        $stmp ->close();
        $conn->close(); 
    }
