<?php
    $rep1 = $_POST["opc1"];
    $rep2 = $_POST["opc2"];
    $rep3 = $_POST["opc3"];
    $rep4 = $_POST["opc4"];
    $rep5 = $_POST["opc5"];
    $respostas = array($rep1,$rep2,$rep3,$rep4,$rep5);
    

    function verificar ($res){
        $prova = array();
        $corretas = 0;
        $erradas = 0;

        $res[0]== 4 ? $prova[]="Questão 1: correta" : $prova[]="Questão 1: incorreta";
        $res[1]== 10 ? $prova[]="Questão 2: correta" : $prova[]="Questão 2: incorreta";
        $res[2]=='6' ? $prova[]="Questão 3: correta" : $prova[]="Questão 3: incorreta";
        $res[3]=='26' ? $prova[]="Questão 4: correta" : $prova[]="Questão 4: incorreta";
        $res[4]=='4' ? $prova[]="Questão 5: correta" : $prova[]="Questão 5: incorreta";

        for($i=0;$i<5;$i++){
            $j=$i+1;
            $prova[$i]=="Questão $j: correta" ? $corretas += 1 : $erradas += 1;
        }
        $mediaAcertos = 20*$corretas;
        
        echo"
            <fieldset>
                <legend> RESUMO DA PROVA</legend>
                Pontuação: $mediaAcertos% <br>
                Acertos: $corretas <br>
                Erradas: $erradas <br><br>
            </fieldset> <br>
        ";

        foreach($prova as $questoes){
            echo"$questoes <br>";
        }
    }
    


    verificar($respostas)
?>
