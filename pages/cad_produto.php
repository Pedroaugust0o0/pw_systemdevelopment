<?php
include "conexao.php";

$produto = $_POST['produto'];
$marcadoproduto = $_POST['marca'];
$peso = $_POST['peso'];
$datavalidade = $_POST['datavalidade'];
$fornecedor = $_POST['fornecedor'];
$qtdecomprada = $_POST['qtdecomprada'];
$preco = $_POST['preco'];

$sql = "INSERT INTO produto(produto, marcadoproduto, peso, datavalidade, fornecedor, qtdecomprada, preco )
        VALUES ('$produto' , '$marcadoproduto' , '$peso' , '$datavalidade' , '$fornecedor' , '$qtdecomprada' , '$preco')";

if (mysqli_query($conexao, $sql)) {
    echo "Produto cadastrado com sucesso";
} else {
    echo  "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>