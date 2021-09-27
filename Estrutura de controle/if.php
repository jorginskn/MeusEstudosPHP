<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>

<body>
    <form action="if.php" method="GET">
        <label>A</label>
        <input type="number" name="a">
        <label>B</label>
        <input type="number" name="b">
        <button type="submit">Enviar</button>
    </form>
    <?php
    $a = @$_REQUEST["a"];
    $b = @$_REQUEST["b"];

    if ($a > $b) {
        print $a . " É maior que  " . $b;
    } elseif ($b > $a) {
        print $b . "  É maior que  " . $a;
    } else {
        print $a .  "  É igual a    " . $b;
    }
    ?>

</body>

</html>