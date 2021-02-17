<?php 
include("conexao.php");
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/my.css">
  <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
  <link rel="stylesheet" type="text/css" href="CSS/inputsCSS.css">
  <meta charset="utf-8">

  <title> Edição de concorrentes - Big Rapper Brasil </title>
</head>
<body>
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand border-bottom border-primary">
          <a href="#">
            Big Rapper Brasil
          </a>
        </li>
        <hr>
        <li>
          <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
          </svg> Cadastrar Concorrentes</a>
        </li>
        <li>
          <a href="listar.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
          </svg> Listar Concorrentes</a>
        </li>
        <li>
          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
            <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
          </svg> Votação</a>
        </li>
        <li>
          <a href="vencedor.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="margin-top: -2px;"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg> Ver vencedores</a>
        </li>
      </ul>
    </div>

    <?php 
    $script = "SELECT * FROM concorrentes WHERE id = $id";

    $consulta = $conexao->query($script);
    echo "<br>";

    if (!$consulta) {
      echo "Deu erro!";
      echo $conexao->error;
    } else {


      $i = 0;
      $primeiraLinha = true;


      $linha = $consulta->fetch_array(MYSQLI_ASSOC);
      $id = $linha['id'];
      $nome = $linha['nome'];
      $musica = $linha['musica'];        
      $votos = $linha['votos']; 
      $foto = $linha['foto'];
    }
    ?>

    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="nav border-bottom" style="margin: -39px 0 0 -35px; width: auto;">
          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><div class="div-menu-toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div></a>
        </div>

        <div class="row-mb-5 mt-4" >
          <div class="col-sm-6 mx-auto">
            <div class="card">
              <img class="card-img-top" src="<?php echo $foto ?>" style="width: 100%; height: 200px;">               
              <form name="formEdicaoConcorrente" action="acaoEdicaoConcorrente.php" method="POST" enctype="multipart/form-data" class="ml-2 mr-2">     
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <label class="form_label mr-3" style="font-weight: bold;">Foto: </label>
                  <input type="file" class="form-control-file" name="foto" required="">
                </li>
                <li class="list-group-item">
                  <label class="form_label mr-3" style="font-weight: bold;">Nome: </label>
                  <input type="text" name="nome" value="<?php echo $nome ?>" placeholder="Nome" class="w-75 input" required=""> 
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                </li>
                <li class="list-group-item">
                  <label class="form_label mr-3" style="font-weight: bold;">Música: </label>
                  <input type="text" name="musica" value="<?php echo $musica ?>" class="w-75 input" required="">
                </li>
                <li class="list-group-item text-primary font-weight-bold mx-auto">
                  <input type="submit" name="editarInput" value="Editar" style="background: none; border: none; color: #007bff; font-weight: bold; text-decoration: none; 
                  cursor: pointer;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                  </a>
                </li>
              </ul>
            </form>
            </div>
          </div>
        </div>

      </div>
    </div>

    <script>
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        this.classList.toggle("change");
      });
    </script> 
  </body>
  </html>