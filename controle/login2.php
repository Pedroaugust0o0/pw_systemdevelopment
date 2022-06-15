<?php
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cliente(nome, email, senha, cpf, dtns, sexo )
        VALUES ('$nome' , '$email', '$senha' , '$cpf' , '$dtns' , '$sexo')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastro com sucesso";
} else {
    echo  "Erro" . mysqli_connect_error($conexao);
}


mysqli_close($conexao);
header('Location: ../pages/sabores.php');
?>
