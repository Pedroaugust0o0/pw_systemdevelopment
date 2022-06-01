<?php
    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "delete from cliente where id=".$id;

     foreach ($resultado as $key => $valor) {}
   // echo $valor['id'];
     ?>
       <tr><?php echo $valor['id']; ?></td>
       <td><?php echo $valor['nome']; ?></td>
       <td><?php echo $valor['email']; ?></td>
       <td><?php echo $valor['cpf']; ?></td>
       <td><?php echo $valor['dtns']; ?></td>
       <td><?php echo $valor['sexo']; ?></td>
     }
