<?php
  class aluno{
 private $matricula = null;
 private $nome = null;
 private $rg = null;
 private $cpf = null;

 function __construct($matricula, $nome, $rg, $departamento){
   $this-> $matricula= $matricula;
   $this-> $nome = $nome;
   $this-> $rg = $rg;
   $this-> $departamento= $departamento;
 }
 //------------------------------------
 public function getMatricula(){
   return $this->$matricula;
 }
public function setMatricula($mat){
$this->$matricula = $mat;
}
//--------------------------------------
public function getNome(){
   return $this->$nome;
 }
public function setNome($nom){
$this->$nome = $nom;
}
//--------------------------------------
public function getRg(){
   return $this->$rg;
 }
public function setRg($registro){
$this->$rg = $registro;
}
//--------------------------------------
public function getDepartamento(){
   return $this->$departamento;
 }
public function setDepartamento($dpt){
$this->$departamento = $dpt;
}
}
?>