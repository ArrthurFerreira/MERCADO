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
<form name="listagem" method="post" action="#">
Selecione um codigo:
<select name="lista" ><br /><br />
<option value="" data-default disabled selected></option>
<?php
include('config.php');
$resultado = mysqli_query($conexao,"select * from categoria");
while ($linha = mysqli_fetch_array ($resultado)) { 
?>
<option value="<?php echo $linha['codigo'] ?>"> <?php echo
$linha['codigo'] ?></option>
<?php
} 
?>
</select>
<button type="submit">Buscar</button> <br><br>
</form>
<br><br>
<hr>
<?php
//condição que verifica se houve alguma submissão do formulário
if (!$_POST) {
echo "Nenhum registro selecionado";
}else{
$instrucao = "select * from categoria where codigo like '".$_POST['lista']."'"; 
$resultado = mysqli_query($conexao, $instrucao);
while ($linha = mysqli_fetch_array ($resultado)) { 
?>
<form action="bd_acoes.php" method="POST">
Codigo:
<input type="text" name="codigo" value="<?php echo $linha['codigo']?>">
Nome:
<input type="text" name="nome" value="<?php echo $linha['nome'] 
?>" >

<button type="submit" name="alterar_registro" > Alterar</button> <br><br>
</form>
<?php
}
} 
mysqli_close($conexao); 
?>
</body>
</html>
