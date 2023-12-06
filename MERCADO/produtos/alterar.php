<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title> Cadastro Produto</title>
</head>
<body>
<a href="index.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a
href="alterar.php">Alterar </a> - <a href="excluir.php"> Excluir </a> <br>
<hr>
<form name="listagem" method="post" action="#">
Selecione um codigo_barra:
<select name="lista" ><br /><br />
<option value="" data-default disabled selected></option>
<?php
include('config.php');
$resultado = mysqli_query($conexao,"select * from produtos");
while ($linha = mysqli_fetch_array ($resultado)) { 
?>
<option value="<?php echo $linha['codigo_barra'] ?>"> <?php echo
$linha['codigo_barra'] ?></option>
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
$instrucao = "select * from produtos where codigo_barra like '".$_POST['lista']."'"; 
$resultado = mysqli_query($conexao, $instrucao);
while ($linha = mysqli_fetch_array ($resultado)) { 
?>
<form action="bd_acoes.php" method="POST">
Codigo_barra:
<input type="text" name="codigo_barra" value="<?php echo $linha['codigo_barra']?>">
Cod_categoria:
<input type="text" name="cod_categoria" value="<?php echo $linha['cod_categoria'] 
?>" >
Marca:
<input type="text" name="marca" value="<?php echo $linha['marca'] ?>" >
Descricao:
<input type="text" name="descricao" value="<?php echo $linha['descricao']?>">
Peso:
<input type="text" name="peso" value="<?php echo $linha['peso']?>">
Data_validade:
<input type="text" name="data_validade" value="<?php echo $linha['data_validade']?>">
Data_fabricacao:
<input type="text" name="data_fabricacao" value="<?php echo $linha['data_fabricacao']?>">
<button type="submit" name="alterar_registro" > Alterar</button> <br><br>
</form>
<?php
}
} 
mysqli_close($conexao); 
?>
</body>
</html>