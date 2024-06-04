 <?php
 $base=$_POST['num1'];
 $expoente=$_POST['num2'];

 $resultado=1;
 $con++;

 while($con<=$expoente){
    $resultado *= $base;
    $con++;
 }
 echo "resultado: $resultado<br />";
?>