<?php 
include("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/CirculoVotos.css">
  <title>Resultado - Big Rapper Brasil</title>
</head>
<body>
  <h1 align="center" class="mb-4 mt-4">Big Rapper Brasil - Resultado</h1>
  <div class="container divResultado mb-4 mt-4 w-75" >
    <div class="row mb-4 mt-4">
      <div class="col" style="margin-left: 130px; margin-top: 100px;">
        <h4 class="border rounded-circle" style="padding: 6px;  margin-right: 100px; background-color: #DCDCDC;" align="center">2º</h4>
      </div>
      <div class="col" >
        <img src="img/crownicon.png" style="width: 100px; margin-left: 150px; margin-top: 40px;">
      </div>
      <div class="col" style="margin-left: 230px; margin-top: 100px;">
        <h4 class="border rounded-circle" style="padding: 6px; margin-right: 100px; background-color: #DCDCDC" align="center">3º</h4>
      </div>
    </div>
    <div class="row">
      <div class="card ml-4" style="width: 19rem;">
        <img class="card-img-top" src="img/294430.jpg" alt="Card image cap" id="imagem1" onmouseover="aparecePainel()" onmouseleave="retiraPainel()">
        <div class="card-body">
          <h4 class="card-title" align="center">Autor Foda</h4>
          <p class="card-text">Música de Referência: Música Foda</p>
          <p align="center">Porcentagem de votos</p>
          <div class="progress mx-auto" data-value='23'>
            <span class="progress-left">
              <span class="progress-bar border-primary"></span>
            </span>
            <span class="progress-right">
              <span class="progress-bar border-primary"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">23<sup class="small">%</sup></div>
            </div>
          </div>
        </div>
      </div>   

      <div class="card ml-4 border-primary" style="width: 23rem;">
        <img class="card-img-top" src="img/terra.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title" align="center">Autor Foda</h4>
          <p class="card-text">Música de Referência: Música Foda</p>
          <p align="center">Porcentagem de votos</p>
          <div class="progress mx-auto" data-value='38'>
            <span class="progress-left">
              <span class="progress-bar border-primary"></span>
            </span>
            <span class="progress-right">
              <span class="progress-bar border-primary"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">38<sup class="small">%</sup></div>
            </div>
          </div>
        </div>
      </div>    

      <div class="card ml-4" style="width: 15rem;">
        <img class="card-img-top" src="img/tigre.jpg" alt="Card image cap">
        <div class="card-body">
          <h4 class="card-title" align="center">Autor Foda</h4>
          <p class="card-text">Música de Referência: Música Foda</p>
          <p align="center">Porcentagem de votos</p>
          <div class="progress mx-auto" data-value='17'>
            <span class="progress-left">
              <span class="progress-bar border-primary"></span>
            </span>
            <span class="progress-right">
              <span class="progress-bar border-primary"></span>
            </span>
            <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
              <div class="h2 font-weight-bold">17<sup class="small">%</sup></div>
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
</script>
</body>
</html>