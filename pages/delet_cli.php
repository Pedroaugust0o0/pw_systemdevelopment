<?php
    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "delete from cliente where id=".$id;

    if($conexao->query($sql)){
      header('location:tabelaCli.php');
    }else{
      header('location:tabelaCli.php');
      echo 'Id não encontrado';
    }

      