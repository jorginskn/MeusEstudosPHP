<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de Triangulo</title>
</head>
<body>
    <form action="#" method="GET">
        
    
        <label>Primeiro Lado</label>
        <input type="number" name="lado1">
        <Label>Segundo lado</Label>
        <input type="number" name="lado2">
        <label>Terceiro Lado</label>
        <input type="number" name="lado3">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>





<?php 
/*
    11. Faça uma página Web que peça os 3 lados de um triângulo. O script deverá informar se os valores podem ser  um triângulo. Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno.
    Dicas:
    Três lados formam um triângulo quando a soma de quaisquer dois lados for maior que o terceiro;
    Triângulo Equilátero: três lados iguais;
    Triângulo Isósceles: quaisquer dois lados iguais;
    Triângulo Escaleno: três lados diferentes;
*/

$l1 = $_GET["lado1"];
$l2 = $_GET["lado2"];
$l3 = $_GET["lado3"];

    if( ($l1+$l2>$l3)&&($l1+$l3>$l2)&&($l2+$l3>$l1) ){
    if($l1==$l2 && $l2==$l3)
    echo "Triângulo equilátero";
    elseif ($l1==$l2 || $l1==$l3 || $l2==$l3)
    echo "Triângulo isósceles";
    else
    echo "Triângulo escaleno";
    }else
    echo "O triângulo não existe";
                                                     
