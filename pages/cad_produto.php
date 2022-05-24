<?php
include "conexao.php";

$produto = $_POST['produto'];
$nome = $_POST['nome'];
$marcadoproduto = $_POST['marca do produto'];
$peso = $_POST['peso'];
$validadedemercadoria = $_POST['validade de mercadoria'];
$fornecedor = $_POST['fornecedor'];
$quantiadaemin = $_POST['quantiadae min'];
$quantiadaemax = $_POST['quantidade max'];
$preço = $_POST['preço'];

$sql = "INSERT INTO cliente(produto, nome, marcadoproduto, peso, valiadadedemercadoria, fornecedor, quantidademin, quantidademax, preço )
        VALUES ('$produto' , '$nome', '$marcadoproduto' , '$peso' , '$validadedemercadoria' , '$fornecedor' , '$quantidade' , '$quantidademax' , '$preço')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastro com sucesso";
} else {
    echo  "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>