<?php
include "conexao.php";

$produto= $_POST['produto'];
$marca = $_POST['marca'];
$peso= $_POST['peso'];
$dtvalidade = $_POST['dtvalidade'];
$fornecedor = $_POST['fornecedor'];
$quantidade= $_POST['quantidade'];
$preço = $_POST['preço'];


$sql = "INSERT INTO cliente(nome, email, senha, cpf, dtns, sexo)
        VALUES ('$nome' , '$email', '$senha' , '$cpf' , '$dtns' , '$sexo')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastro com sucesso";
} else {
    echo  "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>


























<form action="cadastro.php" method="POST">