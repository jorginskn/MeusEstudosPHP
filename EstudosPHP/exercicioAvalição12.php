<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bissexto</title>
</head>
<body>
    <form action="exercicioAvalição12.php" method="GET">
    <Label>Informe um ano </Label>
    <input type="number" name="ano">
    <button type="submit">Enviar</button>
    </form>
<?php
    
      $ano;
      if($ano % 4 == 0) {
          echo "Ano Bissexto!";
      }
      else {
          echo "Ano não bissexto!";
      }
      

        ?>
</body>
</html>


