<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $salarioA = $_POST["salAn"];

    

    if($idade<20){
        echo"Você não possui os criterios básicos para o emprestimo. <br>";
    }else{
        $meta_idade = floor($idade/10)-1;
        $meta_salario = $salarioA / 5;
        $meta_emprestimo = $meta_salario*$meta_idade;
        echo  "Emprestimo concedido no valor de : R$ $meta_emprestimo";
    }
    
?>