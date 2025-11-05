<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<?php
require 'config.inc.php';

$id = intval($_GET['id'] ?? 0);
$sql = "DELETE FROM enderecos_entrega WHERE id = $id";
if(mysqli_query($conexao, $sql)){
    echo "<p>Endereço excluído com sucesso.</p>";
    echo "<p><a href='?pg=admin/enderecos-admin'>Voltar para lista</a></p>";
}else{
    echo "<p>Erro ao excluir: " . mysqli_error($conexao) . "</p>";
}
?>
