<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<?php
require 'config.inc.php';

$id = intval($_GET['id'] ?? 0);
$sql = "SELECT * FROM enderecos_entrega WHERE id = $id";
$res = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($res);
?>
<div>
    <h2>Alterar Endereço</h2>
    <form action="?pg=admin/enderecos-altera" method="post">
        <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
        <label>Cliente (ID):</label>
        <input type="number" name="cliente_id" value="<?php echo $dados['cliente_id']; ?>" required><br>
        <label>Logradouro:</label>
        <input type="text" name="logradouro" value="<?php echo $dados['logradouro']; ?>" required><br>
        <label>Número:</label>
        <input type="text" name="numero" value="<?php echo $dados['numero']; ?>" required><br>
        <label>Bairro:</label>
        <input type="text" name="bairro" value="<?php echo $dados['bairro']; ?>" required><br>
        <label>Cidade:</label>
        <input type="text" name="cidade" value="<?php echo $dados['cidade']; ?>" required><br>
        <label>Estado:</label>
        <input type="text" name="estado" value="<?php echo $dados['estado']; ?>" required><br>
        <label>CEP:</label>
        <input type="text" name="cep" value="<?php echo $dados['cep']; ?>" required><br>
        <label>Complemento:</label>
        <input type="text" name="complemento" value="<?php echo $dados['complemento']; ?>"><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>
</div>
