<?php require_once("../controller/ControllerListar.php");?>
<?php include("head.php") ?>
<link rel="stylesheet" href="index.css">
<nav class="navbar navbar-expand-lg" style="background-color: #B3ECA7;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bert_Salad</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ListUsuarios.php"> Listar User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastroP.php">Novo Prato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ListPratos.php">Listar Pratos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">  
<h1>List Users</h1>
 
  
    <table class='table table-hover table-striped table-bordered' style="background-color: #C6FFC0;">
    <tr>
    <th>#</th>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Endereço</th>
    <th>Ações</th>
    </tr>
     
    <tbody>
            <?php new listarController();  ?>

        </tbody>

</table>
</div>