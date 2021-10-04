<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="Operation.php" method="GET">
        <label>NUM 1</label>
        <input type="number" name="num1">
        <select name="operador">
            <option value="1"> + </option>
            <option value="2"> - </option>
            <option value="3"> * </option>
            <option value="4"> / </option>
        </select>
        <label>NUM 2</label>
        <button type="submit">Enviar</button>
    </form>
 <?php
        $num1 = @$_REQUEST["num1"];
        $num2 = @$_REQUEST["num2"];
        $oper = @$_REQUEST["operador"];
       

        if ($oper==1) {
            $resultado = $num1 + $num2;
        } elseif($oper==2) {
            $resultado = $num1 - $num2;
        } elseif($oper==3) {
            $resultado = $num1 * $num2;
        } else {
            $resultado =  $num1 / $num2;
        }
          print $resultado;
 ?>

</body>

</html>