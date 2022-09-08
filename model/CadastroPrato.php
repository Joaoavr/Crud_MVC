<?php
require_once("bancoPrato.php");

class Cadastro extends Banco {

    private $nome;
    private $tipo_Prato;
    private $preco;


    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setTipo($string){
        $this->tipo_Prato = $string;
    }
    public function setPreco($string){
        $this->preco = $string;
    }
    
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return $this->tipo_Prato;
    }
    public function getPreco(){
        return $this->preco;
    }
   

    public function incluir(){
        return $this->setPrato($this->getNome(),$this->getTipo(),$this->getPreco());
    }
}
?>
