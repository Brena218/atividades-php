<?php
$d=$_POST['d'];
echo $d;

function dat ($gabilel){
    $va = substr($gabilel,5,2);

    switch ($va){
        case "01":
            echo "Janeiro";
            break;

        case "02":
            echo "Fevereiro";
            break;

        case "03":
            echo "Março";
            break;

        case "04":
            echo "Abril";
            break;

        case "05":
            echo "Maio";
            break;

        case "06":
            echo "Junho";
            break;

        case "07":
            echo "Julho";
            break;

        case "08":
            echo "Agosto";
            break;

        case "09":
            return "Setembro";
            break;

        case "10":
            echo "Outubro";
            break;

        case "11":
            echo "Novembro";
            break;

        case "12":
            echo "Dezembro";
            break;
    }       
}

echo "<br>o mes atual é ",dat($d);
?>