<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<?php
require 'config.inc.php';

$id = intval($_POST['id'] ?? 0);
$cliente_id = intval($_POST['cliente_id'] ?? 0);
$logradouro = mysqli_real_escape_string($conexao, $_POST['logradouro'] ?? '');
$numero = mysqli_real_escape_string($conexao, $_POST['numero'] ?? '');
$bairro = mysqli_real_escape_string($conexao, $_POST['bairro'] ?? '');
$cidade = mysqli_real_escape_string($conexao, $_POST['cidade'] ?? '');
$estado = mysqli_real_escape_string($conexao, $_POST['estado'] ?? '');
$cep = mysqli_real_escape_string($conexao, $_POST['cep'] ?? '');
$complemento = mysqli_real_escape_string($conexao, $_POST['complemento'] ?? '');

$sql = "UPDATE enderecos_entrega SET cliente_id=$cliente_id, logradouro='$logradouro', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$estado', cep='$cep', complemento='$complemento' WHERE id=$id";

if(mysqli_query($conexao, $sql)){
    echo "<p>Endereço atualizado com sucesso.</p>";
    echo "<p><a href='?pg=admin/enderecos-admin'>Voltar para lista</a></p>";
}else{
    echo "<p>Erro ao atualizar: " . mysqli_error($conexao) . "</p>";
}
?>
