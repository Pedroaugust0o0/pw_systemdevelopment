<?php
    include("conexao.php");

    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $cpf=$_POST['cpf'];
    $dtns=$_POST['dt nascimento'];
    $sexo=$_POST['sexo'];

    $sql="INSERT INTO cadastro(nome, email, senha, cpf, dtns, sexo')
            VALUES ('$nome' , '$email', '$senha' , '$cpf' , '$dtns' , '$sexo')";

            if(mysqli_query($conexao, $sql)){
                echo "Usuário cadastro com sucesso";
            }
            else{
                echo  "Erro" .mysqli_connect_error($conexao);
            }
            mysqli_close($conexao);
?>


























<form action="cadastro.php" method="POST">
    