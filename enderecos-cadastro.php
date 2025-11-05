<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<?php
require 'config.inc.php';

// Recebe POST
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $cliente_id = $_POST['cliente_id'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'] ;
    $cep = $_POST['cep'] ;
    $complemento = mysqli_real_escape_string($conexao, $_POST['complemento'] ?? '');
}else{
        echo "<H2>Envio de dados não permitido</H2>";
}

$sql = "INSERT INTO enderecos_entrega (cliente_id, logradouro, numero, bairro, cidade, estado, cep, complemento) 
VALUES ('$cliente_id', '$logradouro', '$numero', '$bairro', '$cidade', '$estado', '$cep', '$complemento')";

$inserir = mysqli_query($conexao, $sql);

    if($inserir) {
    echo "<p>Endereço cadastrado com sucesso.</p>";
    echo "<p><a href='?pg=admin/enderecos-admin'>Voltar para lista</a></p>";
}else{
    echo "<p>Erro ao cadastrar: " . mysqli_error($conexao) . "</p>";
}
?>
