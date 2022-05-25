<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro do cliente</title>
    <link rel="stylesheet" type="text/css" href="../css/cliente.css">
</head>
<body>
    <h1>Cadastro</h1>
    <div id="area">
<form method="$_POST" class ="formulario"action="cadastro2.php">
<fieldset>
    <legend><b>Fórmulário de cadastro</b></legend>
    <br>
    <div class="inputBox">
        <input type="text" name="nome" id="nome" class="campo_nome"required placeholder="Nome">
        <label for="nome" class="labelInput">Nome completo</label>
                    <br></br>
        <input type="email" name="email" id="email" required placeholder="Email">
        <label for="nome" class="labelInput">Email</label>
                    <br></br>
        <input type="password" name="senha" id="senha" required placeholder="Senha">
        <label for="nome" class="labelInput">Senha</label> 
                    <br></br>
        <input type="number" name="cpf" \
			pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
			title="Digite um CPF no formato: xxx.xxx.xxx-xx" placeholder="xxx.xxx.xxx.xx">
        <label for="nome" class="labelInput">CPF</label>
                    <br></br>
        <input type="date" name="dtns" id="dtns" required>
        <label for="nome" class="labelInput">Data de nascimento</label>
                    <br></br>
        <input type = "checkbox" id = "sexo" name = "sexo" value = "sexo">
        <label for="nome" class="labelInput">Masculino</label>
                    <br></br>
        <input type = "checkbox" id = "sexo" name = "sexo" value = "sexo">
        <label for="nome" class="labelInput">Feminino</label>
                    <br></br>
        <input type = "checkbox" id = "sexo" name = "sexo" value = "sexo">
        <label for="nome" class="labelInput">trans neutre</label>
                    <br></br>
        <input type="submit" name="button" id="submit" class="botao">
    </div>
</fieldset>
</form>
    </div>
</body>
</html>
=======
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
>>>>>>> 602ccbf85fb6fad96100b795db10beaeb09ce9fa
