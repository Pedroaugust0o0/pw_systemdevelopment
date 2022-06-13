<?php

if (!empty($_GET['id'])) {

  include_once('conexao.php');

  $id = $_GET['id'];

  $sqlSelect = 'delete from cliente WHERE id=' . $id;

  // echo $sqlSelect;

  $conexao->query($sqlSelect);

  // if ($result->num_rows > 0) {
  //   $sqlDelete = "DELETE FROM usuário WHERE id=".$id;
  //   // $resultDelete = $conexao->query($sqlSelect);
  // }
}
header('location:../pages/tabelaCli.php');

