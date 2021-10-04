<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aluno</title>

</head>

<body>
    <form action="exercicioAvaliação10.php" method="GET">
    <LABEl> PRIMEIRA NOTA</LABEl>
    <input type="number" name="nota1">
    <Label> SEGUNDA NOTA </Label>
    <input type="number" name="nota2">
    <button type="submit">Enviar</button>
    </form>

</body>

</html>

<?php
/* 10. Faça uma página Web que pede duas notas de um aluno. Em seguida ele deve calcular a média do aluno e dar o seguinte resultado:
    A mensagem "Aprovado", se a média alcançada for maior ou igual a seis;
    A mensagem "Reprovado", se a média for menor do que seis;
    A mensagem "Aprovado com Distinção", se a média for igual a dez. */


    $n1 = @$_GET["nota1"];
    $n2 = @$_GET["nota2"];

    $media = ($n1 + $n2) / 2;

    if ($media == 10) {
        echo "Parabéns, aprovado com distinção, nota máxima!!!";
    } else if ($media >= 6) {
        echo "Parabéns, aprovado!!";
    } else {
        echo "Infelizmente você foi reprovado.";
    }
