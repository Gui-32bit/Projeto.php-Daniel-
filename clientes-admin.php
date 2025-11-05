<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<?php

    require "config.inc.php";

    echo "<p><a href='?pg=admin/clientes-cadastro-form'>Cadastrar Cliente</a></p>";
    echo "<h2>Lista de Clientes</h2>";

    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    while($dados = mysqli_fetch_array($resultado)){
        echo "Id: ".$dados['id']." | ";
        echo "Nome: ".$dados['cliente']." | ";
        echo "Cidade: ".$dados['cidade']." | ";
        echo "Estado: ".$dados['estado']." | ";
        echo " | <a href='?pg=admin/clientes-altera-form&id=$dados[id]'>Alterar</a>";
        echo " | <a href='?pg=admin/clientes-excluir&id=$dados[id]'>Excluir</a>";
        echo "<hr>";
    }