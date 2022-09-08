<?php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="index.css">

<?php include("head.php"); ?>

<body>
<nav class="navbar navbar-expand-lg  " style="background-color: #B3ECA7;">
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
<div class="bg-image p-5 text-center shadow-1-strong  mb-0 text-black" 
  style="background-image: url('https://guiaviajarmelhor.com.br/wp-content/uploads/2022/08/restaurantes-miami.jpg'); height: 699.999px;"
>


<div class="container mt-5  ">
            <h1  class="text-center">Bert Salad</h1>
            <p class="text-center fs-2 mt-3">O melhor restaurante vegetariano de Belo Horizonte</p>
            <div class="button-div">

            </div>
        </div>

</div>

<footer class="bg-light text-center text-lg-start mt-0">
  <div class="text-center p-3" style="background-color: #B3ECA7;">
    © 2022 Copyright:
    <a class="text-dark" href="index.php">Bert_Salad.com</a>
  </div>
</footer>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
