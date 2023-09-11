<!DOCTYPE html>
<html>

<body>
    <!-- VARIABLE -->
<br>
<?php
$txt = "Hello world!";
// $x = 5;
// $y = 10.5;

echo $txt;
// echo "<br>";
// echo $x;
// echo "<br>";
// echo $y;
// ?>
<br>
    <!-- IF ELSE -->
    <br>
    <?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>
<br>
    <!-- SWITCH -->
    <br>
    <?php
$favcolor = "black";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "black":
    echo "Your favorite color is black!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
<br>
    <!-- FOREACH -->
    <br>
    <?php
$car = array("Fortuner", "Civic", "Avanza", "Pajero");

foreach ($car as $value) {
  echo "$value <br>";
}
?>
<br>
<!-- FUNCTION -->
<br>
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?>

<!-- DATE AND TIME -->
Get your own PHP Server
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

<!-- PHP OP -->
<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>

<!-- PHP CONSTRUKTOR -->
<?php
class komputer {
  public $prosesor;
  public $memory;
  public $ram;
  public function __construct($prosesor = "Prosesor", $memory = "Memory", $ram ="RAM")
    {
        $this ->prosesor =$prosesor;
        $this ->memory =$memory;
        $this ->ram =$ram;
} 
public function gatdata()
    {
        return "$this->prosesor | $this->memory | $this->ram";
}
}
$komputer1 = new komputer("Core 17","225 GB"."8 GB");
$komputer2 = new komputer("Core 10","500 GB");
echo "spek komputer Sekolah : " . $komputer1->gatData();
echo "<br />";
echo "spek komputer Rusak : " . $komputer2->gatData();
?>
<br>
<br>
<?php
class product {
    public $ram ;
    public function __construct($ram ="RAM")
    {
       $this->ram = $ram;
    }
           function __destruct() 
    {
            echo "Ram komputer {$this->ram}.";
    }
    }
    $komputer1 = new product("225 GB");
    ?>
<br>
<br>
<!-- SESSION -->
<?php
session_start();
        echo ' id user saya adalah ' .$_SESSION['loged_in_user_id'] = '1' ;
        echo '<br> ';
        echo 'user name saya adalah ' . $_SESSION['loged_in_user_name'] = 'username ' ;
?>
</body>
</html>