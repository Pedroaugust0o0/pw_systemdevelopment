<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro do Produto</title>
    <link rel="stylesheet" type="text/css" href="../css/cliente.css">
</head>

<body>
    <h1>Cadastro de Produto</h1>
    <form method="post" action="cad_produto.php">
        <fieldset>
            <legend><b>Fórmulário de Produto</b></legend>
            <div class="inputBox">
                <p>
                    <label for="produto" class="labelInput">Produto</label>
                    <input type="text" name="produto" id="produto" class="campo_nome" required>
                </p>
                <p>
                    <label for="marca" class="labelInput">Marca</label>
                    <input type="text" name="marca" id="marca" class="campo_nome" required>
                </p>
                <p>
                    <label for="peso" class="labelInput">Peso</label>
                    <input type="number" name="peso" id="peso" class="campo_nome" required>
                </p>
                <p>
                    <label for="dtvalidade" class="labelInput">Data de validade</label>
                    <input type="date" name="dtvalidade" id="dtvalidade" class="campo_nome" required>
                </p>
                <p>
                    <label for="fornecedor" class="labelInput">Fornecedor</label>
                    <input type="text" name="fornecedor" id="fornecedor" class="campo_nome" required>
                </p>
                <p>
                    <label for="qdte" class="labelInput">Quantidade</label>
                    <input type="number" name="qdte" id="qdte" class="campo_nome" required>
                </p>
                <p>
                    <label for="preco" class="labelInput">Preço</label>
                    <input type="number" name="preco" id="preco" class="campo_nome" required>
                </p>
                <p> <input type="submit" name="button" id="submit"></p>

            </div>
        </fieldset>
    </form>
    </div>
</body>

</html>