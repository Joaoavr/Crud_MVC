<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $telefone;
    private $endereco;


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTelefone($string){
        $this->telefone = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEndereco(){
        return $this->endereco;
    }
   

    public function incluir(){
        return $this->setCliente($this->getNome(),$this->getTelefone(),$this->getEndereco());
    }
}
?>
