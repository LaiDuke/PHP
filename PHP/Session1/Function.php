<?php
  function Giai_thua($value=0)
  {
    $result = 1;
    for ($i=0; $i < $value; $i++) {
      $result *=($i+1);
    }
    return $result;
  }
echo Giai_thua();
function S1($value=0)
{
  $result = 0;
  for ($i=0; $i < $value ; $i++) {
    $result += ($i+1);
  }
  return $result;
}
echo "<hr/>".S1(6);
function S2($value=0)
{
  $result = 0;
  for ($i=1; $i <= $value ; $i+=2) {
    $result += $i;
  }
  return $result;
}
function S3($value=0)
{
  $result = 0;
  for ($i=0; $i <= $value ; $i+=2) {
    $result += $i;
  }
  return $result;
}
function S4($value=0)
{
  $result = 0;
  for ($i=0; $i <= $value ; $i++) {
    $result += ($i+1)**2;
  }
  return $result;
}
 ?>
