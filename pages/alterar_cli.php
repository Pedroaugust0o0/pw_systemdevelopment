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
               
            <legend><b>Alterar Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" maxlength="240" class="campo_nome" placeholder="Nome" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                    <br></br>
                    <input type="email" name="email" id="email" maxlength="50"  placeholder="Email"  required>
                    <label for="nome" class="labelInput">Email</label>
                    <br></br>
                    <input type="password" name="senha" id="senha" maxlength="10"  placeholder="Senha" required>
                    <label for="nome" class="labelInput">Senha</label>
                    <br></br>
                    <input type="text" id="cpf" maxlength="14" placeholder="xxx.xxx.xxx-xx" />
                    <label for="nome" class="labelInput">CPF</label>
                    <br></br>
                    <input type="date" name="dtns" id="dtns"  placeholder="Dtns"  required>
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

