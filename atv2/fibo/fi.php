<?php
$n=$_POST['number'];
if($n<2){
    echo "error (digite um número da sequência)";
}else{
    $ultimo=1;
    $penultimo=0;
    
    echo "0<br />1<br />";
    for($con=1; $con<=$n-2; $con++){
        $atual=$ultimo +$penultimo;
        echo $atual. "<br />";

        $penultimo=$ultimo;
        $ultimo=$atual;
    }
}
?>