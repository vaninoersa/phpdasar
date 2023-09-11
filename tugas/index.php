<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <br>
  <br>
  umur: <input type="text" name="umur">
 
<br>
<p>Gender:</p>
  <input type="radio" id="html" name="gender" value="perempuan">
  <label for="html">Perempuan</label>
  <input type="radio" id="css" name="gender" value="laki laki">
  <label for="laki laki">Laki laki</label>
<br>
<br>
<p>makanan Kesukaan Saya:</p>
  <input type="checkbox" id="vehicle1" name="makanan[]" value="Nasi Goreng">
  <label for="makanan"> Nasi Goreng</label>
  <input type="checkbox" id="vehicle2" name="makanan[]" value="Sego megono">
  <label for="makanan"> Sego megono</label>
  <input type="checkbox" id="vehicle3" name="makanan[]" value="bakso">
  <label for="makanan"> Bakso</label>
  <br>
  <input type="submit">
  <br>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $umur = $_POST['umur'];
  $gender = $_POST['gender'];
  $makanan = $_POST['makanan'];
  if (empty($name)) {
  } else {
    echo 'nama saya '. '' . $name;
    echo '<br>';
    echo 'umur saya '. '' . $umur;
    echo '<br>';
    echo 'Gender saya adalah '. '' .$gender;
    echo '<br>';
    echo 'makanan kesukaan saya adalah ';
    $M = count($makanan);
    for ($x = 0; $x < $M; $x++) {
      echo $makanan[$x] . " ";
    }
  }
}
?>


</form > 
</body>
</html>