<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro do cliente</title>
    <link rel="stylesheet" type="text/css" href="../css/cliente.css">
</head>

<body>
        <form method="post" action="cad_cliente.php">
            <fieldset>
                <legend><b>Formulário de cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" maxlength="240" class="campo_nome" required placeholder="Nome">
                    <label for="nome" class="labelInput">Nome completo</label>
                    <br></br>
                    <input type="email" name="email" id="email" maxlength="50" required placeholder="Email">
                    <label for="nome" class="labelInput">Email</label>
                    <br></br>
                    <input type="password" name="senha" id="senha"  maxlength="10" required placeholder="Senha">
                    <label for="nome" class="labelInput">Senha</label>
                    <br></br>
                    <input type="text" id="cpf" maxlength="11" placeholder="xxx.xxx.xxx-xx" />
                    <label for="nome"   class="labelInput">CPF</label>
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
                    <input type="submit" name="button" class="submit">
                    <br></br>
                    <input type="button" value="Voltar" onClick="history.go(-1)" class="voltar">
                </div>
            </fieldset>
        </form>
        </div>
</body>

</html>