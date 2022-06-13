<?php
include "conexao.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "select * from usuário";

$pesquisa = mysqli_query($conexao, $sql);

$login = false;

foreach($pesquisa as $key => $valor)
{
    if($email == $valor['email'] && $senha == $valor['senha'])
    $login = true;
}

mysqli_close($conexao);

if ($login == true) {
}else{
    header('location:../controle/login.php');
}
?>