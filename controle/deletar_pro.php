<?php

if (!empty($_GET['id'])) {

  include_once('conexao.php');

  $id = $_GET['id'];

  $sqlSelect = 'delete from produto WHERE id=' . $id;

  // echo $sqlSelect;

  $conexao->query($sqlSelect);

  // if ($result->num_rows > 0) {
  //   $sqlDelete = "DELETE FROM produto WHERE id=".$id;
  //   // $resultDelete = $conexao->query($sqlSelect);
  // }
}
header('location:tabelaPro.php');
