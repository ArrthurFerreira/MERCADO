<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Cadastro Produto </title>
</head>
<body>
<a href="index.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a
href="alterar.php">Alterar </a> - <a href="excluir.php"> Excluir </a> <br>
<hr>
<?php
include('config.php');
$resultado = mysqli_query($conexao,"select * from produtos");
echo "\n";
//Enquanto existir linhas resultantes da consulta realizada, serão exibidos 

//respectivos campos da tabela 
while ($linha = mysqli_fetch_array ($resultado)) {
echo $linha["codigo_barra"] . "<br>";
echo $linha["cod_categoria"] . "<br>"; 
echo $linha["marca"] . "<br>";
echo $linha["descricao"] . "<br>";
echo $linha["peso"] . "<br>";
echo $linha["data_validade"] . "<br>";
echo $linha["data_fabricacao"] . "<br>";
echo "<hr>\n";
}
echo "\n";
mysqli_close($conexao);
?>
</body>
</html>
