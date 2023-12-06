<?php
require 'config.php';
//caso seja recebido o nome do botão INSERIR
if (isset($_POST['inserir_registro'])) {
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];

    // Corrigindo a query de inserção
    $instrucao = "INSERT INTO categoria (codigo, nome) VALUES ('$codigo', '$nome')";
    $resultado = mysqli_query($conexao, $instrucao);

    if ($resultado) {
        echo "Registro cadastrado com sucesso!";
    } else {
        echo "Registro não cadastrado";
    }
    echo "<br><br><a href='index.html'> Voltar </a>";
}

    //caso seja recebido o nome do botão ALTERAR
    if (isset($_POST['alterar_registro'])) {
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
    
        // Corrigindo a query de atualização
        $instrucao = "UPDATE categoria SET nome='$nome' WHERE codigo='$codigo'";
        $resultado = mysqli_query($conexao, $instrucao);
    
        if ($resultado) {
            echo "Registro alterado com sucesso";
        } else {
            echo "Registro não alterado";
        }
        echo "<br><br><a href='alterar.php'> Voltar </a>";
    }
    
    //caso seja recebido nome do botão EXCLUIR
    if(isset($_POST['excluir_registro']))
    {
    $codigo = $_POST['codigo'];
    $instrucao = "DELETE FROM categoria WHERE codigo like '".$codigo."' ";
    //echo $instrucao;
    $resultado = mysqli_query($conexao, $instrucao);
    if($resultado)
    {
    echo "Regitro excluído com sucesso";
    }
    else
    {
    echo "Não foi possível excluir o registro";
    }
    echo "<br><br> <a href='excluir.php'> Voltar </a>";
    }
    ?>    