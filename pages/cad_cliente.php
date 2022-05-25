<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$dtns = $_POST['dtns'];
$sexo = $_POST['sexo'];


$sql = "INSERT INTO cliente(nome, email, senha, cpf, dtns, sexo )
        VALUES ('$nome' , '$email', '$senha' , '$cpf' , '$dtns' , '$sexo')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastro com sucesso";
} else {
    echo  "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>
<<<<<<< HEAD


























=======
>>>>>>> 6e6e7200b958b68c0eac854dfc25bd7f7fa8dda0
