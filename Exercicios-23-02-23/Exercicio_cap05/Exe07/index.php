<?php
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$dados = array($nome, $idade);

$opem = fopen("dados.txt", "w");
fwrite($opem, "$dados");
fclose($opem);
?>