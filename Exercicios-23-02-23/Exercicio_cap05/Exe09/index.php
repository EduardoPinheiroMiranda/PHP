<?php

    $estado = $_POST["estado"];
    
    $geo['Acre'] = "Rio Branco";
	$geo['Alagoas'] = "Maceió";
	$geo['Amapá'] = "Macapá";
	$geo['Amazonas'] = "Manaus";
	$geo['Bahia'] = "Salvador";
	$geo['Ceará'] = "Fortaleza";
	$geo['Espírito Santo'] = "Vitória";
	$geo['Goiás'] = "Goiania";
	$geo['Maranhão'] = "São Luis";
	$geo['Mato Grosso'] = "Cuiabá";
	$geo['Mato Grosso do Sul']= "Campo Grande";
	$geo['Minas Gerais'] = "Belo Horizonte";
	$geo['Pará'] = "Belém";
	$geo['Paraiba']= "João Pessoa";
	$geo['Paraná'] = "Curitiba";
	$geo['Pernambuco'] = "Recife";
	$geo['Piauí'] = "Terezina";
	$geo['Rio de Janeiro'] = "Rio de Janeiro";
	$geo['Rio Grande do Norte']= "Natal";
	$geo['Rio Grande do Sul'] = "Porto Alegre";
	$geo['Rondonia'] = "Porto Velho";
	$geo['Roraima'] = "Boa Vista";
	$geo['Santa Catarina'] = "Florianópolis";
	$geo['Sao Paulo'] = "Sao Paulo";
	$geo['Sergipe'] = "Aracaju";
	$geo['Tocantins'] = "Palmas";

    echo " A capital de $estado é : $geo[$estado]";
        
?>