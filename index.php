<html>
<head>
<title>PHP Test</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="index.html">
</head>
<body>

<?php


include_once "aluno.class.php";

$novo = new aluno("123","Por","Gato","Marketing");

$mat = "";

$novo-> setMatricula($mat);

  echo ($novo->getMatricula());

 

    $nom = "";

$novo-> setNome($nom);

  echo ($novo->getNome());


$registro = 12121212121;

$novo-> setRg($registro);

 ($novo->getRg());
$dpt = "";

$novo-> setDepartamento($dpt);

 echo ($novo->getDepartamento());



   ?> 


  </body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <legend>Formulário</legend>
    <link rel="stylesheet" href="style.css" type="text/css">

  <style>
* {
    padding: 0;
    margin: 0;
}

body{
    background: linear-gradient(#4facfe  #00f2fe);
    width: 100%;
    height: 100%;
    display: flex;
}

.section{
    background-color: linear-gradient(#4facfe,  #00f2fe);
    opacity: 0.7;
    align-items: center;
    justify-content: center;
    vertical-align: middle; 
}

.form{
    padding: 0;
    margin: 0;
}

.input{
    outline: 0;
    background-color: linear-gradient(#4fa678, #00f2fe);
    width: 90%;
    height: 15px;
    border-radius: 50px;
    padding-left: 15px;
}
</style>
</head>

<body>



    <form class="formulario" method="post" action="pages/dados.php">
        
        <br><br><br><br><br>
        <title class="titulo">Preencha Com Os Dados Do Aluno</title>
        <br><br>
        <input name="nome" class="campo" placeholder="Nome">
<br><br>
<input name="matricula" class="campo" placeholder="Matrícula">
<br><br>
<input name="cpf" class="campo" placeholder="CPF">
<br><br>
<input name="rg" class="campo" placeholder="Rg">
<br><br>
<input class="enviar" type="submit" value="Enviar">



    </form> 

    
    
</body>
</html>