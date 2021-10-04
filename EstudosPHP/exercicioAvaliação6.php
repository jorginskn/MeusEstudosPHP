<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <form action="exercicioAvaliação6.php" method="GET">
      
         <label>Primeiro numero</label>
         <input type="number" name="n1">
         <label>Segundo Numero</label>
         <input type="number" name="n2"><BR>
         <label>Terceiro Numero</label>
         <input type="number" name="n3">
        <button type="submit">Enviar</button>
         </form>
    
    
</body>
</html>

<?php 
/* 6. Faça um programa que receba 3 números. Informe qual é o maior e o menor dos dois. Se o resultado da soma dos dois (maior e menor) for maior que 100 o programa deverá apresentar seu resultado multiplicando o maior com o menor. */

 
    $n1 = @$_GET["n1"];
    $n2 = @$_GET["n2"];
    $n3 = @$_GET["n3"];

    $maior = 0;
    $menor = 0;



        if($n1 > $n2) {
            $maior = $n1;
         }
         else {
          $maior = $n2;
                    }
        if($n3 > $maior) {
             $n3 = $maior;
         }

         $menor = $n1;

                if($n2 < $menor) {
                    $menor = $n2;
                    }
                    if($n3 < $menor) {
                    $menor = $n3;
                    }

echo "O maior número entre $n1, $n2 e $n3 é o $maior, o menor é o $menor";
if(($maior + $menor) == 100) {
    echo "<br>A soma entre o menor ($menor) e o maior ($maior) deu mais que 100<br>";
    echo "A multiplicação dos dois é ",$maior * $menor;
}