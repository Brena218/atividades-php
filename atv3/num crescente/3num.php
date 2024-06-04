<?php
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$num3=$_POST['num3'];

if($num2 < $num1){
    $temp=$num1;
    $num1=$num2;
    $num2=$temp;
}
if($num3 < $num1){
    $temp=$num1;
    $num1=$num3;
    $num3=$temp;
}
if($num3 < $num2){
    $temp=$num2;
    $num2=$num3;
    $num3=$temp;
}

echo $num1,$num2,$num3;

?>