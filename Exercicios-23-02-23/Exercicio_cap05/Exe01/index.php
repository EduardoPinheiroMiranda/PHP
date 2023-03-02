<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

        if($idade>=16){
            echo "$nome você pode votar";
        }else{
            echo "$nome você não pode votar";
        }
?>