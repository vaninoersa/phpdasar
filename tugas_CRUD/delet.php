<?php
    include 'connect.php';
        $id = $_GET ['id'];
        $sql = "delete from sekolah where id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:read.php');
        } else {
            die ($conn->connect_error);
        }
?>