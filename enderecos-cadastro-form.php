<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<div>
    <h2>Cadastrar Endereço de Entrega</h2>
    <form action="?pg=admin/enderecos-cadastro" method="post">
        <label>Cliente (ID):</label>
        <input type="number" name="cliente_id" required><br>
        <label>Logradouro:</label>
        <input type="text" name="logradouro" required><br>
        <label>Número:</label>
        <input type="text" name="numero" required><br>
        <label>Bairro:</label>
        <input type="text" name="bairro" required><br>
        <label>Cidade:</label>
        <input type="text" name="cidade" required><br>
        <label>Estado:</label>
        <input type="text" name="estado" required><br>
        <label>CEP:</label>
        <input type="text" name="cep" required><br>
        <label>Complemento:</label>
        <input type="text" name="complemento"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
</div>
