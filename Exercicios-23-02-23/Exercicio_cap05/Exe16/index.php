<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $codigo = $_POST["id"];

    $data = date('d/m/y h:i');
    echo"$data <br>";

    if(!empty($nome)){
        echo"$nome <br>";
    }else{
        echo" campo nome vazio<br>";
    }
    if(!empty($idade)){
        echo"$idade <br>";
    }else{
        echo" campo idade vazio<br>";
    }
    if(!empty($codigo)){
        echo"$codigo <br>";
    }else{
        echo" campo código vazio<br>";
    }
?>