<?php
if (isset($_POST['Num1']) && isset($_POST['Num2'])) {
  $Num1 = $_POST['Num1'];
  $Num2 = $_POST['Num2'];
  $operator = $_POST['operator'];
  $result = 0;
  if ($operator == "Add") {
    $result = $Num1 + $Num2;
  } elseif ($operator == "Sub") {
    $result = $Num1 - $Num2;
  } elseif ($operator == "Mul") {
    $result = $Num1 * $Num2;
  } elseif ($operator == "Devide") {
    $result = $Num1 / $Num2;
  } else {
    $result = $Num1 + $Num2;
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
    <form class="" action="Form.php" method="post">
      Number1: <input type="number" name="Num1" value="<?php echo (isset($Num1))?$Num1:'';?>"> <br>
      <select class="" name="operator">
        <option value="Add">+</option>
        <option value="Sub">-</option>
        <option value="Mul">x</option>
        <option value="Devide">/</option>
      </select>
      <br>
      Number2: <input type="number" name="Num2" value="<?php echo (isset($Num2))?$Num2:'';?>"> <br>
      <input type="submit" name="Add" value="Result">
    </form>
  </body>
</html>
<?php

  echo "Result = ". $result;


 ?>
