<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>

<body>
    <form action="if2.php" method="POST">
        <label>Qual sua idade?</label>
        <input type="number" name="idade">
        <button type="submit">Enviar</button>
    </form>
    <?php
        $idade = $_POST["idade"];
        if($idade  >= 18){
            print "  Você  é maior de idade";
        }else{
            print " Voce é menor de idade";
        }
    ?>

</body>

</html>