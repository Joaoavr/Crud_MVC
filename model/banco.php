<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setCliente($nome,$telefone,$endereco){
        $stmt = $this->mysqli->prepare("INSERT INTO Cliente (`nome`, `telefone`, `endereco`) VALUES (?,?,?)");
        $stmt->bind_param("sss",$nome,$telefone,$endereco);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getCliente(){
        $result = $this->mysqli->query("SELECT * FROM Cliente");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteCliente($id){
        if($this->mysqli->query("DELETE FROM `Cliente` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaCliente($id){
        $result = $this->mysqli->query("SELECT * FROM Cliente WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateCliente($nome,$telefone,$endereco,$id){
        $stmt = $this->mysqli->prepare("UPDATE `Cliente` SET `nome` = ?, `telefone`=?, `endereco`=? WHERE `nome` = ?");
        $stmt->bind_param("ssss",$nome,$telefone,$endereco,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>
