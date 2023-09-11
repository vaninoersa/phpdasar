<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <title>Document</title>
</head>
<body>
</form>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <br>
  <br>
  umur: <input type="text" name="umur">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $umur = $_POST['umur'];
  if (empty($name)) {
} else {
    echo 'nama saya'. '' . $name;

    echo 'umur saya'. '' . $umur;
  }
  }
?>

</body>
</html>