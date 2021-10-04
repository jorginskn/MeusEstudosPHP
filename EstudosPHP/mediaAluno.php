<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="mediaAluno.php" method="GET">
        <label>NOTA 1</label>
        <input type="number" name="nota1">

        <label>NOTA 2</label>        
        <input type="number" name="nota2">

        <label>NOTA 3</label>
        <input type="number" name="nota3">

        <label>NOTA 4</label>
        <input type="number" name="nota4">

        <button type="submit">ENVIAR</button>
    </form>
    <?php

    $nota1 = @$_REQUEST["nota1"];
    $nota2 = @$_REQUEST["nota2"];
    $nota3 = @$_REQUEST["nota3"];
    $nota4 = @$_REQUEST["nota4"];

    $media =  ($nota1 + $nota2 + $nota3 + $nota4) / 4;
      
    if ($media <= 1){
        print "Aluno Reprovado";
    }elseif(($media > 1) and ($media < 6)){
        print "Aluno de recuperação";
    }else{
        print "Aluno aprovado";
    }


    ?>
    
</body>
</html>