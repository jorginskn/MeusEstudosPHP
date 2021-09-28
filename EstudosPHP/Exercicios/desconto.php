<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Vogal ou consoante</title>
</head>

<body>
    <form action="desconto.php" method="GET">
        <label>Escolha sua forma de pagamento</label><br>
    <select name="operador">
        <option value="1">A VISTA EM DINHEIRO</option>
        <option value="2">A VISTA NO DEBITO</option>
        <option value="3">CREDITO</option>
        <option value="4">CREDITO PARCELADO</option>
        </select>
        <button type="submit">ENVIAR</button>

    </form>
    <?php
    $oper = @$_REQUEST["operador"];

        if ($oper == 1){
            print "10 % DE DESCONTO";
        }elseif($oper == 2){
            print "5% DE DESCONTO";
        }elseif($oper == 3){
            print "5% DE JUROS";
        }elseif ($oper == 4){
            print "10% DE JUROS";
        }   
    ?>
</body>

</html>