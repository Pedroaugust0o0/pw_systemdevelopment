<?php
function __construct($matricula, $nome, $rg, $departamento){
   $this-> $matricula= $matricula;
   $this-> $nome = $nome;
   $this-> $rg = $rg;
   $this-> $cpf= $cpf;
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
public function getCPF(){
   return $this->$cpf;
 }
public function setCPF($cp){
$this->$cpf = $cp;
}
}
?>