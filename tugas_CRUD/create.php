<?php
include ('connect1.php');
if(isset($_POST['submit'])) {
    $nama_sekolah = $_POST['name'];
    $alamat_sekolah = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_hp'];
    $Keperluan = $_POST['Keperluan'];
    $keterangan = $_POST['keterangan'];
    $sql = "insert into sekolah(nama_sekolah, alamat_sekolah, nomor_hp, Keperluan, keterangan) values('$nama_sekolah', '$alamat_sekolah', '$nomor_hp', '$Keperluan', '$keterangan')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:read.php');
    } else {
        die($conn->connect_error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">create</h3>
        <form method = "post">
  <div class="mb-3">
  <label for="name" class="form-label">Nama Sekolah</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-1">
    <label for="alamat" class="form-label">Alamat Sekolah</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="mb-1">
    <label for="Nomor HP" class="form-label">Nomor HP</label>
    <input type="text" class="form-control" id="nomor_hp" name="nomor_hp">
  </div>
  <div class="mb-1">
    <label for="keperluan" class="form-label">Keperluan</label>
    <input type="text" class="form-control" id="Keperluan" name="Keperluan">
  </div>
  <div class="mb-1">
    <label for="Keterangan" class="form-label">Keterangan</label>
    <input type="text" class="form-control" id="keterangan" name="keterangan">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
  </body>
  </html>
