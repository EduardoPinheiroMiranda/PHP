<?php
    $num = $_POST["num"];
    $opc = $_POST["opc"];
    $soma = 0;


    switch($opc){
        case "1":
            if($num%2==0){
                echo "Par";
            }else{
                echo "impar";
            }
        break;
        case "2":
            for($num; $num>1; $num--){
                $soma += $num;
            }
            echo "Fatorial é: $soma";
    }



?>