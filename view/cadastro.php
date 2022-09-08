<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<link rel="stylesheet" href="index.css">

<body>
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
<h1>Novo User</h1>
<form action="../controller/ControllerCadastro.php" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" placeholder="Digite o seu nome:" class="form-control">
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" placeholder="Digite o seu telefone:" class="form-control">
    </div>
    <div class="mb-3">
        <label>Endereço</label>
        <input type="text" name="endereco" placeholder="Digite o seu endereço:" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div> 
</body>

</html>
