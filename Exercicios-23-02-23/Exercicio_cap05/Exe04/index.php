<!--
    Construa uma página que receba dois números e ative um programa PHP 
    que imprima todos os números pares que estejam entre esses dois números (sem incluí-los).
-->

<?php
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];

    if($valor1 < $valor2){
        echo "Os valores pares entre $valor1 e $valor2 são: ";
        for( $valor1; $valor1 < $valor2; $valor1++){
            if($valor1%2==0){
                echo "$valor1 ";
            }
        }
    }else{
        echo "Os valores pares entre $valor2 e $valor1 são: ";
        for( $valor2; $valor2 < $valor1; $valor2++){
            if($valor2%2==0){
                echo "$valor2 ";
            }
        }
    }

?>

