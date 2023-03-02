<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $media = ($nota1 + $nota2 + $nota3)/3;
    if($nota1 < $nota2){
        $nota1 < $nota3 ? $menorNota = $nota1 : $menorNota = $nota3;
    }else{
        $nota2 < $nota3 ? $menorNota = $nota2 : $menorNota = $nota3;
    }
    

    if($nota1 > $nota2){
        $nota1 > $nota3 ? $maiorNota = $nota1 : $maiorNota = $nota3;
    }else{
        $nota2 > $nota3 ? $maiorNota = $nota2 : $maiorNota = $nota3;
    }

    echo "menor nota: $menorNota <br>
          maior nota: $maiorNota <br>
          media: $media";
?>