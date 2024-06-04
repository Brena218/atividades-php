 <?php
 $num1=$_POST['num1'];
 $num2=$_POST['num2'];
 $soma = 0;
 $num1+=1;

for($num1;$num1<$num2;$num1++){
$soma+=$num1;


 echo $num1. "<br>";

}
echo "a soma é: ". $soma;
 ?>
