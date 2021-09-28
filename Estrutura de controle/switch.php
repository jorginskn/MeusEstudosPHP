<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Estruturas de controle</title>
</head>
<body>
    <form action="switch.php" method="GET">
    <label>A</label>
    <input type="number" name = "a">
    <label>B</label>
    <input type="number" name = "b">
    <button type="submit">Enviar</button>


    </form>
<?php   
    switch(@$vogais) {
        case 'A':
            #...
            break;
        case 'E':
            #...
         break;
        case 'I':
            #...
         break;
        case 'I':
                #...
         break;
         case 'I':
        #...
         break;
    }


?>
</body>
</html>
