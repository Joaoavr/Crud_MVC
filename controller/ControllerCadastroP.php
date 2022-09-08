<?php
require_once("../model/cadastroPrato.php");
class cadastroControllerP{

    private $cadastroP;

    public function __construct(){
        $this->cadastroP = new Cadastro();
        $this->incluir();
    }

    private function incluir(){
        $this->cadastroP->setNome($_POST['nome']);
        $this->cadastroP->setTipo($_POST['tipo_Prato']);
        $this->cadastroP->setPreco($_POST['preco']);
        $result = $this->cadastroP->incluir();
        if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o Cliente não está duplicado');history.back()</script>";
        }
    }
}
new cadastroControllerP();
