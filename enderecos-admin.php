<?php echo '<link rel="stylesheet" href="../style.css">'; ?>
<?php
require "config.inc.php";

echo "<h2>Endereços de Entrega</h2>";
echo "<p><a href='?pg=admin/enderecos-cadastro-form'>Cadastrar novo endereço</a></p>";

// Listar endereços com nome do cliente
$sql = "SELECT e.id, e.cliente_id, e.logradouro, e.numero, e.bairro, e.cidade, e.estado, e.cep, e.complemento, c.cliente AS nome_cliente FROM enderecos_entrega e LEFT JOIN clientes c ON e.cliente_id = c.id";
$res = mysqli_query($conexao, $sql);

if(mysqli_num_rows($res) > 0){
    while($dados = mysqli_fetch_assoc($res)){
        echo "<strong>ID:</strong> " . $dados['id'] . "<br>";
        echo "<strong>Cliente:</strong> " . ($dados['nome_cliente'] ?? '—') . "<br>";
        echo "<strong>Endereço:</strong> " . $dados['logradouro'] . ", " . $dados['numero'] . " - " . $dados['bairro'] . "<br>";
        echo "<strong>Cidade/Estado:</strong> " . $dados['cidade'] . " / " . $dados['estado'] . "<br>";
        echo "<strong>CEP:</strong> " . $dados['cep'] . "<br>";
        if(!empty($dados['complemento'])) echo "<strong>Complemento:</strong> " . $dados['complemento'] . "<br>";
        echo "<a href='?pg=admin/enderecos-altera-form&id={$dados['id']}'>Editar</a> | ";
        echo "<a href='?pg=admin/enderecos-excluir&id={$dados['id']}' onclick=\"return confirm('Confirma exclusão do endereço ID {$dados['id']}?')\">Excluir</a>";
        echo "<hr>";
    }
}else{
    echo "<p>Nenhum endereço cadastrado.</p>";
}
?>
