<?php
$num=$_POST['num'];

switch($num){

    case 1:
        echo "o dia da semana é domingo.";
     break;

    case 2:
        echo "o dia da semana é segunda.";
     break;
        
    case 3:
        echo " o dia da semana é terça-feira.";
    break;
        
    case 4:
        echo "o dia da semana é quarta-feira.";
     break;
        
    case 5:
        echo " o dia da semana é quinta-feira.";
     break;
        
    case 6;
        echo "o dia da semana é sexta-feira.";
     break;
        
    case 7:
        echo "o dia da semana é sabado. ";
    break;

    default:
     echo "ERROR";    

}


?>