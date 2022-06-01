<?php
    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "delete from cliente where id=".$id;

<<<<<<< HEAD
    if($conexao->query($sql)){
      header('location:tabelaCli.php');
    }else{
      header('location:tabelaCli.php');
      echo 'Id não encontrado';
    }

      
=======
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
>>>>>>> c4a88bad95baaaa546b9042b88dc4bed2b160a98
