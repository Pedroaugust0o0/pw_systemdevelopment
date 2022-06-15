<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Faça seu login e aproveite ao máximo</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>
        <form method="post" action="../controle/login2.php">
            <fieldset>
                <legend><b>Faça seu login e aproveite ao máximo</b></legend>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="50" required placeholder="Email">
                    <label for="nome" class="labelInput">Email</label>
                    <br></br>
                    <input type="password" name="senha" id="senha"  onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);"  maxlength="10" required placeholder="Senha">
                    <label for="nome" class="labelInput">Senha</label>
                    <br></br>
                    <input type="submit" name="button" class="submit">
                    <br></br>
                    <a href="../index.php" type="button" class="voltar">voltar</a>
                </div>
            </fieldset>
        </form>
        </div>
</body>

</html>