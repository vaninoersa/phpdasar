<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Database Register</title>
  </head>
  <style>
body {
  background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsVhI3y5-ibVi0y8Y57Cy5byzmE1DM-_Tn5FYkUh2mpEUWXrQXo_6LoinzCFKWox8HlB0&usqp=CAU);
    background-repeat: no-repeat;
    background-size: cover;
}
.nakal{
  margin: 50px auto;
  width: 300px;
  padding: 30px 25px;
  border-radius: 25px;
  /* background-image: url(https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000); */
  background-repeat: no-repeat;
  background-size: cover;
  margin-top: 6%;
}
</style>
  <link rel="stylesheet" href="style.css">
  <body class="bg-light">
    <div class="nakal">
      <center>
      <h2>Form Pendaftaran Register</h2>
        <br>
        <form action="connect_register.php" method="post">
          <label><b>
          Username
          </b></label><br>
          <input type="text" id="username" name="username" placeholder="Username atau email" ><br>
          <br>
          <br>
          <label><b>
          email
          </b></label><br>
          <input type="text" id="email" name="email" placeholder="password"><br>
          <br>
          <br>
          <label><b>
          Password
          </b></label><br>
          <input type="text" id="password" name="password" placeholder="Password"><br>
          <br>
          <br>
          <button>Registrasi</button>
        </form>
        <br>
      </center>
    </div>
  </body>
</html>