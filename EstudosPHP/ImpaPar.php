<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="ImpaPar.php" method="GET">
        <label>Digite um número</label>
        <input type="number" name="numero">
        <button type="submit">ENVIAR</button>
    </form>
    <?php

    if(($_REQUEST["numero"]%2)==1){
        print "O Numero  " .$_REQUEST["numero"]. " é impar"; 
    }else{
        print  "O Numero " .$_REQUEST["numero"]. " é par";
    }

    

    ?>
    
</body>
</html>