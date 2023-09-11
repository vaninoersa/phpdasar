<?php
    $servername = "localhost:3306";
    $username_db = "root";
    $password_db = "";
    $databest_name = "db_sekolah";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = new mysqli($servername, $username_db, $password_db, $databest_name);

    if ($conn->connect_error) {
        die("koneksi database gagal: " . $conn->connect_error);
    } else {
        $stmp = $conn->prepare("select * from admin where email = ?");
        $stmp->bind_param("s", $email);
        $stmp->execute();
        $stmp_result = $stmp->get_result();
        if ($stmp_result->num_rows > 0) {
            $data = $stmp_result->fetch_assoc();
            $cek_password = $data['password'];
            if ($data['password'] === md5($password)) {
                header('location:create.php');
            } else {
                echo "<h2>Email Atau Password Salah</h2>";
            } 
        } else {
        echo "<h2>Email Atau Password Salah</h2>";
        }
}