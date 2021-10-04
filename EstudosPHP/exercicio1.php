<?php 
$nome = "Jorge Martins Ferraz";
$anoNascimento = 1999;
$anoAtual = @date("y");
//Exercicio 1
$idade = $anoAtual - $anoNascimento;
echo ("Meu nome é ".$nome." e tenho ".$idade."anos");
// Exercicio 2
$senha = $nome.$ano_Nascimento;
$senha = str_replace(" ", "", $senha);
$senha = str_shuffle($senha);
$senha = substr($senha, 0 , 10);
echo $senha;

$num1 = 1;  
$num2 = 2;
$num3 = 3; 
$soma = ($num1 + $num2 + $num3) / $num3;
//Exercicio 3

$frase = "Vai se fuder mano";
$palavrao = array("Vai se fuder");
echo str_replace($palavrao, "*****", $frase);
    
//Exercicio 4
echo str_shuffle($nome, 10, $anoNascimento);

?>