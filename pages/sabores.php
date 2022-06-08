<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/produto.css">
    <script src="../js/carrinho.js"></script>
    <title>Sabores</title>
</head>
<body>
    <h1 class="menor">Nossos</h1>
    <h2 class="maior">Sabores</h2>
    <h1 class="medio">SABORES DE SORVETE</h1>

<!--------------------------------------------------DIVISÃÓOOOOO---------------------------------------------------------------------------->
<hr>
<div class="menu1">
    <div>
        <img src="../img/sorveteoreo-removebg-preview.png" alt="oreo" class="oreo"><h3>OREO</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti" onclick="retirar()">-</button>
    </div>
    <div>
        <img src="../img/chocolat-icecream-removebg-preview.png" alt="chocolate" class="chocolate"><h3>CHOCOLATE</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/morangosort-removebg-preview.png" alt="morango" class="morango"><h3>MORANGO</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
</div>
<div class="menu1">
    <div>
        <img src="../img/cheesecake-de-goiabada-removebg-preview.png" alt="cheesecake" class="cheesecake"><h3>CHEESECAKE DE GOIABADA</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/pistache-removebg-preview.png" alt="pistache" class="pistache"><h3>PISTACHE</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/blueberrysorvete-removebg-preview.png" alt="blueberry" class="blueberry"><h3>BLUEBERRY</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
</div>
</hr>
<!-------Divisão----------------------------------------para---------------------------------não gerar confusão----------------------------->

<hr>
<h1 class="medio2">SABORES DE SORBET</h1>
<div class="menu2">
    <div>
        <img src="../img/limaosorbe-removebg-preview.png" alt="Sorbet de Limão" class="limao"> <h3>SORBET DE LIMÃO</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/sorbetframboesa-removebg-preview.png" alt="Sorbet de franboesa" class="framboesa"> <h3>SORBET DE FRAMBOESA</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/bananasorbe-removebg-preview.png" alt="Sorbet de banana e mel" class="banana"> <h3>SORBET DE BANANA E MEL</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
</div>

<div class="menu2">
    <div>
        <img src="../img/mangasorbet-removebg-preview.png" alt="Sorbet de manga" class="manga"> <h3>SORBET DE MANGA</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/maracujasorbet-removebg-preview.png" alt="Sorbet de maracuja" class="maracuja"> <h3>SORBET DE MARACUJÁ</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
    <div>
        <img src="../img/sorbetbaunilha-removebg-preview.png" alt="Sorbet de baunilha" class="baunilha"> <h3>SORBET DE BAUNILHA</h3>
        <button value="compar" id="add" onclick="adicionar()">+</button>
        <input type="text" id="qtd" value="0">
        <button value="compar" id="rti">-</button>
    </div>
</div>

<button type="enviar" value="enviar" id="enviar1"><a href="./pedido.php">Enviar pedido</a></button>

<button type="button" value="Voltar" onClick="history.go(-1)" id="voltar">Voltar</button>
</body>
</html>