<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Cadastro Categoria </title>
</head>
<body>
<a href="index.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a
href="alterar.php">Alterar </a> - <a href="excluir.php"> Excluir </a> <br>
<hr>
<?php
include('config.php');
$resultado = mysqli_query($conexao,"select * from categoria");
echo "\n";
//Enquanto existir linhas resultantes da consulta realizada, serão exibidos 

//respectivos campos da tabela 
while ($linha = mysqli_fetch_array ($resultado)) {
echo $linha["codigo"] . "<br>";
echo $linha["nome"] . "<br>"; 

echo "<hr>\n";
}
echo "\n";
mysqli_close($conexao);
?>
</body>
</html>