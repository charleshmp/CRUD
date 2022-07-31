<!doctype html>
<html lang="pt=BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=listar">Listar Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuario</a>
        </li>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
                include ("conexao.php");
                switch(@$_REQUEST['page']){
                    case"novo":
                        include('novo-usuario.php');
                        break;
                        case"listar":
                            include("listar-usuario.php");
                            break;
                        case"salvar":
                            include("salvar-usuario.php");
                            break;
                        case"editar":
                            include("editar-usuario.php");
                            break;
                            default:
                            print '<h1>Bem Vindo ao CRUD Policia Penal</h1>';
                }
            ?>
          <img src="css/Img/policiapenal.png" alt="">

        </div>
    </div>
</div>
          

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>