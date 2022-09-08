<?php
require_once("../model/bancoPrato.php");

class editarControllerP {

    private $editar;
    private $nome;
    private $tipo_Prato;
    private $preco;


    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaPrato($id);
        $this->nome            =$row['nome'];
        $this->tipo_Prato        =$row['tipo_Prato'];
        $this->preco        =$row['preco'];

    }
    public function editarFormulario($nome,$tipo_Prato,$preco,$id){
        if($this->editar->updatePrato($nome,$tipo_Prato,$preco,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return $this->tipo_Prato;
    }
    public function getPreco(){
        return $this->preco;
    }
 


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarControllerP($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['tipo_Prato'],$_POST['preco'],$_POST['id']);
}
?>
