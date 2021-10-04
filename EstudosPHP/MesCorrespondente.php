<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Vogal ou consoante</title>
</head>

<body>
    <form action="MesCorrespondente.php" method="GET">
        <label>Digite um numero de 1 a 12</label><br>
        <input type="number" name="num">
        <button type="submit">ENVIAR</button>

    </form>
    <?php
    switch ($_REQUEST["num"]) {
        case '1':
            print"Janeiro";
            break;
        case '2':
            print "Fevereiro";
            break;
        case '3':
            print 'Março';
            break;
        case '4':
            print 'Abril';
            break;
        case '5':
            print "Maio";
            break;
        case '6':
            print "Junho";
            break;
        case '7': 
            print "Julho";
            break;
        case '8':
            print "Agosto";
            break;
        case '9':
            print 'Setembro';
            break;
        case '10':
            print 'Outubro';
            break;
        case '11':
            print 'Novembro';
            break;
        case '12':
            print "Dezembro";
            

    }


    ?>
</body>

</html>