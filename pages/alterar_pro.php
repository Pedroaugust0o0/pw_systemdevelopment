<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" type="text/css" href="../css/produto.css">
</head>

<body>
        <form method="post" action="cad_produto.php">
            <fieldset>
               
            <legend><b>Alterar Produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="produto" id="produto" maxlength="240" class="campo_nome" placeholder="Produto" required>
                    <label for="nome" class="labelInput">Produto</label>
                    <br></br>
                    <input type="text" name="marca" id="marca" maxlength="50"  placeholder="Marca"  required>
                    <label for="marca" class="labelInput">Marca</label>
                    <br></br>
                    <input type="number" name="Peso" id="peso" maxlength="10"  placeholder="Peso" required>
                    <label for="nome" class="labelInput">Peso</label>
                    <br></br>
                    <input type="date" name="dtns" id="dtns"  placeholder="Dtns"  required>
                    <label for="nome" class="labelInput">Data de validade</label>
                    <br></br>
                    <input type="text" name="fornecedor" id="fornecedor" maxlength="50"  placeholder="Fornecedor"  required>
                    <label for="fornecedor" class="labelInput">Fornecedor</label>
                    <br></br>
                    <input type="number" name="quantidade" id="quantidade" maxlength="50"  placeholder="Quantidade"  required>
                    <label for="quantidade" class="labelInput">Quantidade</label>
                    <br></br>
                    <input type="number" name="preco" id="preco" maxlength="50"  placeholder="Preco"  required>
                    <label for="preco" class="labelInput">Preco</label>
                    <br></br>
                    
                    <br></br>
                    <input type="submit" name="button" id="submit">
                </div>
            </fieldset>
        </form>
        </div>
</body>

</html>