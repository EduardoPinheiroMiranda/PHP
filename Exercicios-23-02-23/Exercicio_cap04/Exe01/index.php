<?php
    $regiao = $_POST["estado"];
    
    switch($regiao){
        case 'suldeste':
            echo "Voê na região sudeste no Brasil! <br/>";
            break;
        case 'norte':
            echo "Voê na região norte no Brasil! <br/>";
            break;
        case 'nordeste':
            echo "Voê na região nordeste no Brasil! <br/>";
            break;
        case 'sul':
            echo "Voê na região sul no Brasil! <br/>";
            break;
        case 'centro-oeste' :
            echo "Voê na região centro-oeste no Brasil! <br/>";
            break;
    }

?>
<button><a href="exe04.html">Voltar</a></button>