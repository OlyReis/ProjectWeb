<?php 
include("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/my.css">
	<meta charset="utf-8">
	<title>Big Rapper Brasil</title>
</head>
<body style="margin: 100px 20% 0 15%;">
	<h1 align="center" class="mb-4">Big Rapper Brasil</h1>
	<div class="container col-12 divcadastro rounded border border-primary mb-5">
		<form name="tTeste" action="insert.php" method="POST" enctype="multipart/form-data" class="ml-2 mr-2">

			<label class="mb-0 mt-4">Nome:</label> 
			<input type="text" class="form-control input rounded-0" placeholder="Digite o Nome do concorrente"  name="nome" required="">


			<label class="mb-0 mt-2">Música de Referência:</label>
			<input type="text" class="form-control input rounded-0" placeholder="Digite uma música de referência" name="musica" required="">	


			<label form="labelFoto" class="mt-2 mb-0">Foto do concorrente:</label>
			<input type="file" class="form-control-file input mb-3" name="foto" required="">

			<input type="submit" value="Cadastrar" id="cadastro" class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-0 mt-3 ">

		</form> 
		
	</div>
	<a href="listar.php"><button class="btn btn-primary btn-sm btn-rounded font-weight-bold ">Listar Concorrentes</button></a>
	<a href="votacao.php"><button class="btn btn-primary btn-sm btn-rounded font-weight-bold">Iniciar Votação</button></a>
</body>
</html>