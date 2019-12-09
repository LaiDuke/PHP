<?php
$X1 = 0;
$X1 = 0;
if (isset($_POST['Num1']) && isset($_POST['Num2']) && isset($_POST['Num3'])) {
  $Num1 = $_POST['Num1'];
  $Num2 = $_POST['Num2'];
  $Num3 = $_POST['Num3'];
  if ($Num2**2 - (4*$Num1*$Num3)>=0) {
    $X1 = (-$Num2 + sqrt($Num2**2 - (4*$Num1*$Num3)))/(2*$Num1);
    $X2 = (-$Num2 - sqrt($Num2**2 - (4*$Num1*$Num3)))/(2*$Num1);
  }



}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="Bai1.php" method="post">
      Number1: <input type="number" name="Num1" value="<?php echo (isset($Num1))?$Num1:'';?>"> <br>
      Number2: <input type="number" name="Num2" value="<?php echo (isset($Num2))?$Num2:'';?>"> <br>
      Number3: <input type="number" name="Num3" value="<?php echo (isset($Num3))?$Num3:'';?>"> <br>
      <input type="submit" name="submit" value="Result">
    </form>
  </body>
</html>


<?php
if ($X1 && $X2) {
  echo "X1 =". $X1. "<br>";
  echo "X2 =". $X2. "<br>";
}
 ?>
