<?php include("connect1.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>


</head>

<body class="min-vh-100 d-flex align-items-center">
    <div class="card w-50 m-auto p-3">
        <h3 class="text-center">Read </h3>
        <a href="../tugas_CRUD/create.php" class="btn btn-sm btn-primary">Tambah</a>
        <table class="table  table-striped">
            <thead>
                <tr>

                    <th scope="col">Nama Sekolah</th>
                    <th scope="col">Alamat Sekolah</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Keperluan</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
  <tbody classs="table-grup-divider">
    <?php
    $sql= "select * from sekolah ";
    $result = mysqli_query($conn,$sql);
    if($result){
        while($data = mysqli_fetch_assoc($result)){
            $id= $data['id'];
            $nama_sekolah = $data['nama_sekolah'];
            $alamat_sekolah = $data['alamat_sekolah'];
            $nomor_hp = $data['nomor_hp'];
            $Keperluan = $data['Keperluan'];
            $keterangan = $data['keterangan'];
            echo '
            <tr>
            <td>'.$nama_sekolah.'</td>
            <td>'.$alamat_sekolah.'</td>
            <td>'.$nomor_hp.'</td>
            <td>'.$Keperluan.'</td>
            <td>'.$keterangan.'</td>
            <td class="text-center">
            <a href="update.php?id='.$id.'" class="btn btn-sm btn-primary">Update</a>
            <button onclick="hapus('.$id.')" class="btn btn-sm btn-danger">Delete</button>
            </td>
            </tr>
            ';
        }
    }
   ?>
  </tbody>
</table>
</div>
<script>
    function hapus(id){
        var yes = confirm('Yakin Di Hapus?');
        if(yes == true) {
            window.location.href ="delet.php?id=" + id;
        }
    }
</script>

  </body>

