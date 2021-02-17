<?php
 include("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Votação - Big Rapper Brasil</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
 	 <link rel="stylesheet" type="text/css" href="CSS/my.css">
 	 <link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
 	 <meta charset="utf-8">

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
        $script = "SELECT * FROM concorrentes";

        $consulta = $conexao->query($script);
        echo "<br>";

        if (!$consulta) {
          echo "Deu erro!";
          echo $conexao->error;
        } else {
          
        $total = $consulta->num_rows;
        $i = 0;
        $primeiraLinha = true;

        if ($total > 0) { 
          while ($linha = $consulta->fetch_array(MYSQLI_ASSOC)) {
            $id = $linha['id'];
            $nome = $linha['nome'];
            $musica = $linha['musica'];        
            $votos = $linha['votos']; 
            $foto = $linha['foto'];  
      
        if ($primeiraLinha == true) { echo "
          <div id='page-content-wrapper'>
          <div class='container-fluid'>
            <div class='nav border-bottom' style='margin: -39px 0 0 -35px; width: auto;'>
              <a href='#menu-toggle' class='btn btn-default' id='menu-toggle'><div class='div-menu-toggle'>
                <div class='bar1'></div>
                <div class='bar2'></div>
                <div class='bar3'></div>
              </div></a>
            </div>
            <h1 align='center' class='mb-4 mt-4'>Votação</h1>";
        } 

        if ($i == 3) {
          echo "</div>";
          echo "<div class='row-mb-5 mt-4' style='display: inline-flex;'>";
          $i = 0;
        }
        if ($primeiraLinha == true) { echo "
            <div class='row-mb-5 mt-4' style='display: inline-flex;'>"; 
        }
        ?>
              <div class="col-sm-4">
                <div class="card">
                  <img class="card-img-top" src="<?php echo $foto ?>" style="width: 100%; height: 200px;">
                  <div class="card-body">
                    <h4 class="card-title" id="nome<?php echo $id ?>"> <?php echo $nome; ?></h4>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Musica de referência: <?php echo $musica; ?> </li>
                    <li class="list-group-item font-weight-bold" style="font-size: 20px;">
                      Votos:
                      <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-dash-circle-dotted" viewBox="0 0 16 16" style="margin-left: 30px; margin-right: 5px; color: blue;" id="diminuiVoto<?php echo $id ?>">
                        <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                      </svg></a>
                      <span id="votos<?php echo $id ?>"><?php echo $votos; ?></span>
                      <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16" style="margin-left: 5px; color: blue;" id="adicionaVoto<?php echo $id ?>">
                        <path d="M8 0c-.176 0-.35.006-.523.017l.064.998a7.117 7.117 0 0 1 .918 0l.064-.998A8.113 8.113 0 0 0 8 0zM6.44.152c-.346.069-.684.16-1.012.27l.321.948c.287-.098.582-.177.884-.237L6.44.153zm4.132.271a7.946 7.946 0 0 0-1.011-.27l-.194.98c.302.06.597.14.884.237l.321-.947zm1.873.925a8 8 0 0 0-.906-.524l-.443.896c.275.136.54.29.793.459l.556-.831zM4.46.824c-.314.155-.616.33-.905.524l.556.83a7.07 7.07 0 0 1 .793-.458L4.46.824zM2.725 1.985c-.262.23-.51.478-.74.74l.752.66c.202-.23.418-.446.648-.648l-.66-.752zm11.29.74a8.058 8.058 0 0 0-.74-.74l-.66.752c.23.202.447.418.648.648l.752-.66zm1.161 1.735a7.98 7.98 0 0 0-.524-.905l-.83.556c.169.253.322.518.458.793l.896-.443zM1.348 3.555c-.194.289-.37.591-.524.906l.896.443c.136-.275.29-.54.459-.793l-.831-.556zM.423 5.428a7.945 7.945 0 0 0-.27 1.011l.98.194c.06-.302.14-.597.237-.884l-.947-.321zM15.848 6.44a7.943 7.943 0 0 0-.27-1.012l-.948.321c.098.287.177.582.237.884l.98-.194zM.017 7.477a8.113 8.113 0 0 0 0 1.046l.998-.064a7.117 7.117 0 0 1 0-.918l-.998-.064zM16 8a8.1 8.1 0 0 0-.017-.523l-.998.064a7.11 7.11 0 0 1 0 .918l.998.064A8.1 8.1 0 0 0 16 8zM.152 9.56c.069.346.16.684.27 1.012l.948-.321a6.944 6.944 0 0 1-.237-.884l-.98.194zm15.425 1.012c.112-.328.202-.666.27-1.011l-.98-.194c-.06.302-.14.597-.237.884l.947.321zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a6.999 6.999 0 0 1-.458-.793l-.896.443zm13.828.905c.194-.289.37-.591.524-.906l-.896-.443c-.136.275-.29.54-.459.793l.831.556zm-12.667.83c.23.262.478.51.74.74l.66-.752a7.047 7.047 0 0 1-.648-.648l-.752.66zm11.29.74c.262-.23.51-.478.74-.74l-.752-.66c-.201.23-.418.447-.648.648l.66.752zm-1.735 1.161c.314-.155.616-.33.905-.524l-.556-.83a7.07 7.07 0 0 1-.793.458l.443.896zm-7.985-.524c.289.194.591.37.906.524l.443-.896a6.998 6.998 0 0 1-.793-.459l-.556.831zm1.873.925c.328.112.666.202 1.011.27l.194-.98a6.953 6.953 0 0 1-.884-.237l-.321.947zm4.132.271a7.944 7.944 0 0 0 1.012-.27l-.321-.948a6.954 6.954 0 0 1-.884.237l.194.98zm-2.083.135a8.1 8.1 0 0 0 1.046 0l-.064-.998a7.11 7.11 0 0 1-.918 0l-.064.998zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg></a>
                    </li>
                    <li class="list-group-item text-center">
                      <a href="javascript:void(0)" onclick="atualizaVotos(this);" class="font-weight-bold" id="atualiza<?php echo $id ?>">Atualizar</a>
                    </li>
                  </ul>
                </div>
              </div>
          <?php 
            $i++; 
            $primeiraLinha = false; }}} 
          ?>
        </div>
      </div>
  </div>

  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        this.classList.toggle("change");
      });

    $(document).on('click', 'svg', function (){ 
      if (this.id.includes("diminuiVoto")) {
        $votosConcorrenteClicado = "votos" + this.id.substring(11);
        document.getElementById($votosConcorrenteClicado).innerHTML = parseInt(document.getElementById($votosConcorrenteClicado).innerHTML) - 1;
      };

      if (this.id.includes("adicionaVoto")) {
        $votosConcorrenteClicado = "votos" + this.id.substring(12);
        document.getElementById($votosConcorrenteClicado).innerHTML = parseInt(document.getElementById($votosConcorrenteClicado).innerHTML) + 1;
      };
    });

    function atualizaVotos(atualizaClicado) {
      $idClicado = atualizaClicado.id.substring(8);
      $idVotosConcorrenteClicado = "votos" + atualizaClicado.id.substring(8);
      $votosConcorrenteClicado = document.getElementById($idVotosConcorrenteClicado).innerHTML;
      $idConcorrenteClicado = "nome" + atualizaClicado.id.substring(8);
      $concorrenteClicado = document.getElementById($idConcorrenteClicado).innerHTML;
      $confirmacao = confirm("Deseja atualizar os votos do concorrente" + $concorrenteClicado + "?");
      if ($confirmacao == true) {
        window.location = "acaoAtualizaVotos.php?id=" + $idClicado + "&votos=" + $votosConcorrenteClicado;
      }
    }
    </script>
</body>
</html>