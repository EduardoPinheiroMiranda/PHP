<?php
    $valor = $_POST["valor"];
    $operacao = $_POST["operacao"];

    if($valor==null){
        echo "digite um valor para proseguirmos";
    }else{
        switch($operacao){
            case 'dobro':
                echo $valor*2;
                break;
            case 'cubo':
                echo $valor * $valor * $valor;
                break;
            case 'Raiz Quadrada':
                echo sqrt($valor);
        }
    }
?>