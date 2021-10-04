<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Vogal ou consoante</title>
</head>

<body>
    <form action="vogaisConsoantes.php" method="GET">
        <label>Digite uma letra</label><br>
        <input type="text" name="letra">
        <button type="submit">ENVIAR</button>

    </form>
    <?php
    switch (strtolower($_REQUEST["letra"])) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            print "É uma vogal";
            break;
        default:
            print "É uma consoante";
    }


    ?>
</body>

</html>