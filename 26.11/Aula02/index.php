<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <title>Carros web</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Carros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar_marcas">Cadastrar Marcas</a></li>
            <li><a class="dropdown-item" href="?page=listar_marcas">Listar Marcas</a></li>
                        
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrar_modelos">Cadastrar Modelos</a></li>
            <li><a class="dropdown-item" href="?page=listar_modelos">Listar Modelos</a></li>
                       
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
        <button class="btn btn-primary" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
<div class="container mt-3">
  <?php

  include'config.php';

    switch (@$_REQUEST['page']) {

      case 'cadastrar_marcas':
        include 'cadastrar_marcas.php';
        break;

      case 'listar_marcas':
        include 'listar_marcas.php';
        break;
      
      case 'editar_marcas':
        include 'editar_marcas.php';
        break;
      
      case 'salvar_marcas':
        include 'salvar_marcas.php';
        break;
        case 'cadastrar_modelos':
          include 'cadastrar_modelos.php';
          break;
  
        case 'listar_modelos':
          include 'listar_modelos.php';
          break;
        
        case 'editar_modelos':
          include 'editar_modelos.php';
          break;
        
        case 'salvar_modelos':
          include 'salvar_modelos.php';
          break;

      
      default:
        echo '<img src="../img/foto.jpg" class="img-fluid" alt="...">';
        break;
    }

  ?>
</div>

</div>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>