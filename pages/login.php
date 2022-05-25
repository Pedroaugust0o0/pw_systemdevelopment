<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cliente.css">
    <title>login</title>
</head>
<body>
<fieldset>
<legend>Faça seu login e aporveite ao máximo</legend>
    <form action="login2.php" method="POST" class="formulario"> 
        <label for="nome" class="labelInput">Nome completo</label>
                    <br></br>
        <input type="email" name="email" id="email" class="campo_email"required placeholder="Email">
                    <br></br>
        <label for="nome" class="labelInput">Senha</label>
                    <br></br>
        <input type="senha" name="senha" id="senha" class="campo_senha"required placeholder="Senha"> 
                    <br></br>
        <input type="submit" class="entrar" onclick="Enviar();" value="Entrar"/>
</form>
    </form>
</fieldset> 
</body>
</html>