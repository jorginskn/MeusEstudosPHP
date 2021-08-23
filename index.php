<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <?php
        echo 'Hoje é o dia ' .date('z'). ' do ano<br>';
        // Faça um programa que mostre a sua idade na tela com base na função date 
       $ano_de_nascimento = 1999;
       $idade = date('Y') - $ano_de_nascimento;
       echo "Minha idade é  " .$idade;
       ?>
    
</body>
</html>

