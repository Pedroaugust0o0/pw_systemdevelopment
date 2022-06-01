<!DOCTYPE html>
<html lang="Pt,br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>pesquisa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>pesquisa</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">nome</th>
                            <th scope="col">email</th>
                           
                            <th scope="col">cpf</th>
                            <th scope="col">dtns</th>
                            <th scope="col">sexo</th>
                            <th scope="col">Alterar</th>
                            <th scope="col">Deletar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'conexao.php';

                        $sql = "select * from cliente";

                        $resultado = $conexao->query($sql);

                        foreach ($resultado as $key => $valor) {
                            // echo $valor['id'];
                        ?>
                            <tr>
                                <td><?php echo $valor['id']; ?></td>
                                <td><?php echo $valor['nome']; ?></td>
                                <td><?php echo $valor['email']; ?></td>
                                <td><?php echo $valor['cpf']; ?></td>
                                <td><?php echo $valor['dtns']; ?></td>
                                <td><?php echo $valor['sexo']; ?></td>
                                <td><a href="alterar_cli.php?nome$valor['nome']"><img src="../img/icone-alterar.png" style="width: 20px; height:20px;"></a></td>
                                <a class='btn btn=sm btn=primay' href='tabelaUs.php?$valor[id]'></a>
                                 <td><a href="delet_cli.php?id$valor['id']"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <a class='btn btn=sm btn=primay' href='tabelaUs.php?$valor[id]'></a>
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                        </svg></a></td>
                                
                            </tr>
                        <?php
                        }

                        ?>
                </table>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">