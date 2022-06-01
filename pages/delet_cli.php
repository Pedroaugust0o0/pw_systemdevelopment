<?php
    include 'conexao.php';

    $sql = "select * from cliente";

    $resultado = $conexao->query($sql);

     foreach ($resultado as $key => $valor) {
   // echo $valor['id'];
     ?>
       <tr><?php echo $valor['id']; ?></td>
       <td><?php echo $valor['nome']; ?></td>
       <td><?php echo $valor['email']; ?></td>
       <td><?php echo $valor['cpf']; ?></td>
       <td><?php echo $valor['dtns']; ?></td>
       <td><?php echo $valor['sexo']; ?></td>
     }