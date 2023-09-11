<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<style>
body {
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTabLLLbP0Wwc0Z71HVdujKYBT2cLQqqQb-N5pvTomeAqQP-_AaiuzS7fW_GFH-biqURj8&usqp=CAU);
    background-repeat: no-repeat;
    background-size: cover;
}

.baik {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    border-radius: 25px;
    /* background-image: url(https://png.pngtree.com/background/20210711/original/pngtree-orange-sky-picture-image_1151296.jpg); */
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 6%;
    }
</style>

<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="baik">
        <center>
        <h2 class="a">Kembali Ke Halaman Registrasi</h2>
        <p class="a"><b>Akun Anda Belum Terdaftar</b><a href="register.php">Silahkan Klik di sini</a></p>
        <form action="connect_login.php" method="POST">
            <br>
            <h4>Silahkan Coba Lagi </h4>

            <label><b>
            Username
            </b></label><br>
            <input type="text" id="username" name="username" placeholder="Username atau email" ><br>
            <br>
            <label><b>
            Password
            </b></label><br>
            <input type="text" id="password" name="password" placeholder="Password"><br>
            <br>
            <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />
            <br>
            <br>
            <br>
        </center>
        </form>
            
        </div>

        <div class="col-md-6">
        </div>

    </div>
</div>
    
</body>
</html>