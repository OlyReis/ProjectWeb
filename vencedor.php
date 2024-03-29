<?php 
include("conexao.php");
$consulta = mysqli_fetch_assoc(mysqli_query($conexao, 'SELECT * FROM concorrente ORDER BY votos DESC LIMIT 1 OFFSET 1'));
$somaVotos = mysqli_fetch_assoc(mysqli_query($conexao,'SELECT SUM(votos) as soma FROM concorrente'));
?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/CirculoVotos.css">
  <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
  <title>Resultado - Big Rapper Brasil</title>
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
          <a href="votacao.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
            <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
            <path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
          </svg> Votação</a>
        </li>
        <li>
          <a href="vencedor.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="margin-top: -2px;"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg> Ver vencedores</a>
        </li>
      </ul>
    </div>

    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="nav border-bottom" style="margin: -15px 0 0 -35px; width: auto;">
          <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><div class="div-menu-toggle">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div></a>
        </div>
        <h1 align="center" class="mt-4" style="margin-bottom: 50px;">Big Rapper Brasil - Resultado</h1>
  <?php 
    $QUERY = "SELECT * FROM concorrente";
    $executa_query = mysqli_query($conexao, $QUERY);
    $totalConcorrentes = mysqli_num_rows($executa_query);


    if ($totalConcorrentes < 3) {
      echo "Cadastre pelo menos 3 concorrentes para ver o resultado";
      exit;
    }
  ?>
        <div class="row-mb-5" style="display: inline-flex;">
          <div class="col-sm-4">
            <h5 class="text-center" style="font-size: 76px; margin-left: 10%;">2º</h5>
            <div class="card">
              <img class="card-img-top" src="<?php echo $consulta['foto'] ; ?>" style="width: 100%; height: 210px;">
              <div class="card-body">
                <h3 class="card-title mb-4" align="center"><?php echo $consulta['nome']; ?></h3>
                <p class="card-text" style="font-weight: bold;">Música de Referência: <?php echo $consulta['musica'] ?></p>
                <p align="center">Porcentagem de votos</p>
                <div class="progress mx-auto" data-value="<?php echo number_format($consulta['votos']*100/$somaVotos['soma'], 2, '.', '') ?>">
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold"><?php echo number_format($consulta['votos']*100/$somaVotos['soma'], 2, ',', '') ?><sup class="small">%</sup></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
          $consulta = mysqli_fetch_assoc(mysqli_query($conexao, 'Select * from concorrente ORDER BY votos DESC LIMIT 1'));
          ?>

          <div class="col-sm-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" style="display: block; margin-left: auto; margin-right: auto; width: 50%; margin-top: -10px; margin-bottom: 10px;"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg>
            <div class="card border border-primary">
              <img class="card-img-top" src="<?php echo $consulta['foto'] ; ?>" style="width: 100%; height: 250px;">
              <div class="card-body">
                <h3 class="card-title mb-4" align="center"><?php echo $consulta['nome']; ?></h3>
                <p class="card-text" style="font-weight: bold;">Música de Referência: <?php echo $consulta['musica'] ?></p>
                <p align="center">Porcentagem de votos</p>
                <div class="progress mx-auto" data-value="<?php echo number_format($consulta['votos']*100/$somaVotos['soma'], 2, '.', '') ?>">
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold"><?php echo number_format($consulta['votos']*100/$somaVotos['soma'], 2, ',', '') ?><sup class="small">%</sup></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
          $consulta = mysqli_fetch_assoc(mysqli_query($conexao, 'Select * from concorrente ORDER BY votos DESC LIMIT 1 OFFSET 2'));
          ?>

          <div class="col-sm-3">
            <h5 class="text-center" style="font-size: 76px; margin-left: 10%;">3º</h5>
            <div class="card">
              <img class="card-img-top" src="<?php echo $consulta['foto'] ; ?>" style="width: 100%; height: 170px;">
              <div class="card-body">
                <h3 class="card-title mb-4" align="center"><?php echo $consulta['nome']; ?></h3>
                <p class="card-text" style="font-weight: bold;">Música de Referência: <?php echo $consulta['musica'] ?></p>
                <p align="center">Porcentagem de votos</p>
                <div class="progress mx-auto" data-value="<?php echo number_format($consulta['votos']*100/$somaVotos['soma'], 2, '.', '') ?>">
                  <span class="progress-left">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <span class="progress-right">
                    <span class="progress-bar border-primary"></span>
                  </span>
                  <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                    <div class="h2 font-weight-bold"><?php echo number_format($consulta['votos']*100/$somaVotos['soma'], 2, ',', '') ?><sup class="small">%</sup></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(".progress").each(function() {

        var value = $(this).attr('data-value');
        var left = $(this).find('.progress-left .progress-bar');
        var right = $(this).find('.progress-right .progress-bar');

        if (value > 0) {
          if (value <= 50) {
            right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
          } else {
            right.css('transform', 'rotate(180deg)')
            left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
          }
        }

      })

      function percentageToDegrees(percentage) {

        return percentage / 100 * 360

      }

      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        this.classList.toggle("change");
      });
    </script>
  </body>
  </html>