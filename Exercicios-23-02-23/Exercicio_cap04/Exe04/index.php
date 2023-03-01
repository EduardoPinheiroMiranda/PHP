<?php
    $tabuada = $_POST["tabuada"];
    echo "A tabuada de $tabuada <br/>";
    for($i=1; $i<=10; $i++){
        echo "$i * $tabuada = ".$i*$tabuada ."<br/>";
    }
?>