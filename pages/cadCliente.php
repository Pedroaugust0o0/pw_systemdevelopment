<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro do cliente</title>
    <link rel="stylesheet" type="text/css" href="../css/cliente.css">
</head>

<body>
<<<<<<< HEAD
    <h1>Cadastro</h1>
        <form method="post" action="cad_cliente.php">
=======
        <form method="post" action="cadastroCliente.php" class="form1">
>>>>>>> 6e6e7200b958b68c0eac854dfc25bd7f7fa8dda0
            <fieldset>
                <legend><b>Fórmulário de cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="campo_nome" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                    <br></br>
                    <input type="email" name="email" id="email" required>
                    <label for="nome" class="labelInput">Email</label>
                    <br></br>
                    <input type="password" name="senha" id="senha" required>
                    <label for="nome" class="labelInput">Senha</label>
                    <br></br>
                    <input type="number" name="cpf" \ pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \ title="Digite um CPF no formato: xxx.xxx.xxx-xx">
                    <label for="nome" class="labelInput">CPF</label>
                    <br></br>
                    <input type="date" name="dtns" id="dtns" required>
                    <label for="nome" class="labelInput">Data de nascimento</label>
                    <br></br>
                    <input type="checkbox" id="sexo" name="sexo" value="sexo">
                    <label for="nome" class="labelInput">Masculino</label>
                    <br></br>
                    <input type="checkbox" id="sexo" name="sexo" value="sexo">
                    <label for="nome" class="labelInput">Feminino</label>
                    <br></br>
                    <input type="checkbox" id="sexo" name="sexo" value="sexo">
                    <label for="nome" class="labelInput">trans neutre</label>
                    <br></br>
                    <input type="submit" name="button" id="submit">
                </div>
            </fieldset>
        </form>
        </div>
</body>

</html>