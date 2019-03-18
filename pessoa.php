<?php 

class Pessoa{

private $id;
private $email;    
private $nome;
private $telefone;

function getId(){
    return $this->id;    
}

function setId($id){
    $this->id = $id;
}


function getEmail(){
    return $this->email;
}

function setEmail($email){
    $this->email = $email;
}

function getNome(){
    return $this->nome;
}

function setNome($nome){
    $this->nome = $nome;
}

function getTelefone(){
    return $this->telefone;
}

function setTelefone($telefone){
    $this->telefone = $telefone;
}

function printObjeto(){
    return $this->nome."-".$this->email."-".$this->telefone;
}

}
?>