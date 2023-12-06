    <?php
require 'config.php';

// Caso seja recebido o CPF do botão INSERIR
if (isset($_POST['inserir_registro'])) {   
    $codigo_barra = $_POST['codigo_barra'];
    $cod_categoria = $_POST['cod_categoria'];
    $marca = $_POST['marca'];
    $descricao = $_POST['descricao'];
    $peso = $_POST['peso'];
    $data_validade = $_POST['data_validade']; // Corrigido para usar $_POST
    $data_fabricacao = $_POST['data_fabricacao']; // Corrigido para usar $_POST

    $instrucao = "INSERT INTO produtos (codigo_barra, cod_categoria, marca, descricao, peso, data_validade, data_fabricacao) VALUES 
    ('".$codigo_barra."','".$cod_categoria."','".$marca."', '".$descricao."', '".$peso."', '".$data_validade."', '".$data_fabricacao."')";

    $resultado = mysqli_query($conexao, $instrucao);

    if ($resultado) {
        echo "Registro cadastrado com sucesso!";  
    } else {
        echo "Registro não cadastrado";
    }
    echo "<br><br> <a href='index.html'> Voltar </a>";
}

// Caso seja recebido o CPF do botão ALTERAR
if (isset($_POST['alterar_registro'])) {
    $codigo_barra = $_POST['codigo_barra'];
    $cod_categoria = $_POST['cod_categoria'];
    $marca = $_POST['marca'];
    $descricao = $_POST['descricao'];
    $peso = $_POST['peso'];
    $data_validade = $_POST['data_validade']; // Corrigido para usar $_POST
    $data_fabricacao = $_POST['data_fabricacao']; // Corrigido para usar $_POST

    $instrucao = "UPDATE produtos SET codigo_barra='".$codigo_barra."', cod_categoria='".$cod_categoria."', marca='".$marca."', descricao='".$descricao."', peso='".$peso."', data_validade='".$data_validade."', data_fabricacao='".$data_fabricacao."' WHERE codigo_barra like '".$codigo_barra."'"; 

    $resultado = mysqli_query($conexao, $instrucao);

    if ($resultado) {
        echo "Registro alterado com sucesso";
    } else {
        echo "Registro não alterado";
    }
    echo "<br><br> <a href='alterar.php'> Voltar </a>";
}

// Caso seja recebido o CPF do botão EXCLUIR
if (isset($_POST['excluir_registro'])) {
    $codigo_barra = $_POST['codigo_barra'];
    $instrucao = "DELETE FROM produtos WHERE codigo_barra like '".$codigo_barra."' ";

    $resultado = mysqli_query($conexao, $instrucao);
    if ($resultado) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Não foi possível excluir o registro";
    }
    echo "<br><br> <a href='excluir.php'> Voltar </a>";
}
?>

