<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST,"Nome",FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST,"Matrícula",FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,"Senha",FILTER_SANITIZE_STRING);
//Isso foi apenas um teste para ver se ros valores estavam vindo corretamente
echo "Nome: $nome <br>";
echo "Matrícula: $matricula <br>";
echo "Senha: $senha <br>";
$result_projeto_de_sueide ="INSERT INTO cadastros (nome, matricula, senha) VALUES ('$nome','$matricula','$senha')";
$resultado_projeto_de_sueide = mysqli_query ($conn, $result_projeto_de_sueide);
?>
<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

