<!--
    Crie uma página que receba 10 nomes e notas de alunos e um programa que 
    receba esses valores e calcule a média da turma, imprima essa média bem
    como o nome dos alunos cujas notas estejam abaixo dessa média.
-->

<?php
    $aluno1 = $_POST['a1'];
    $aluno2 = $_POST['a2'];
    $aluno3 = $_POST['a3'];
    $aluno4 = $_POST['a4'];
    $aluno5 = $_POST['a5'];
    $aluno6 = $_POST['a6'];
    $aluno7 = $_POST['a7'];
    $aluno8 = $_POST['a8'];
    $aluno9 = $_POST['a9'];
    $aluno10= $_POST['a10'];
    
    $Naluno1 = $_POST['na1'];
    $Naluno2 = $_POST['na2'];
    $Naluno3 = $_POST['na3'];
    $Naluno4 = $_POST['na4'];
    $Naluno5 = $_POST['na5'];
    $Naluno6 = $_POST['na6'];
    $Naluno7 = $_POST['na7'];
    $Naluno8 = $_POST['na8'];
    $Naluno9 = $_POST['na9'];
    $Naluno10= $_POST['na10'];

    
    $media = ($aluno1+$aluno2+$aluno3+$aluno4+$aluno5+$aluno6+$aluno7+$aluno8+$aluno9+$aluno10)/10;
    echo " Media : $media <br>";
    if($aluno1<$media){
        echo "$Naluno1: $aluno1 <br>";
    }
    if($aluno2<$media){
        echo "$Naluno2: $aluno2 <br>";
    }
    if($aluno3<$media){
        echo "$Naluno3: $aluno3 <br>";
    }
    if($aluno4<$media){
        echo "$Naluno4: $aluno4 <br>";
    }
    if($aluno5<$media){
        echo "$Naluno5: $aluno5 <br>";
    }
    if($aluno6<$media){
        echo "$Naluno6: $aluno6 <br>";
    }
    if($aluno7<$media){
        echo "$Naluno7: $aluno7 <br>";
    }
    if($aluno8<$media){
        echo "$Naluno8: $aluno8 <br>";
    }
    if($aluno9<$media){
        echo "$Naluno9: $aluno9 <br>";
    }
    if($aluno10<$media){
        echo "$Naluno10: $aluno10 <br>";
    }
    
?>