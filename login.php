<?php
include_once("conexao.php");
$nome = filter_input(INPUT_POST,"Nome",FILTER_SANITIZE_STRING);
$matricula = filter_input(INPUT_POST,"Matrícula",FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST,"Senha",FILTER_SANITIZE_STRING);
//Isso foi apenas um teste para ver se ros valores estavam vindo corretamente
//echo "Nome: $nome <br>";
//echo "Matrícula: $matricula <br>";
//echo "Senha: $senha <br>";
$result_projeto_de_sueide ="INSERT INTO cadastros (nome, matricula, senha) VALUES ('$nome','$matricula','$senha')";
$resultado_projeto_de_sueide = mysqli_query ($conn, $result_projeto_de_sueide);
?>
<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<div class="header">

  <h3>Welcome to Home</h3>
  <p>A website created for you</p>
  <img id="imagem" src="https://png.pngtree.com/png-vector/20200309/ourmid/pngtree-back-to-school-student-stationary-material-black-board-artworks-png-image_2150863.jpg" >
</div>
<div class="navbar">
  <a href="http://localhost/projeto_de_sueide/notas.php">Notas</a>
  <a href="#">Sala</a>
  <a href="#">Chat</a>
  <a href="http://localhost/projeto_de_sueide/perfil.php" class="right">Perfil</a>
</div>
