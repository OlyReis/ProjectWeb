<<?php 
include("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/my.css">
	<meta charset="utf-8">
	<title>Projeto Final</title>
</head>
<body>
	<div class="container col-12 divcadastro rounded border border-primary mb-5">
		<form name="tTeste" action="insert.php" method="POST" enctype="multipart/form-data">

			<label class="mb-0">Nome:</label> 
			<input type="text" class="form-control input rounded-0" placeholder="Digite o Nome do concorrente"  name="nome" required="">


			<label class="mb-0">Música de Referência:</label>
			<input type="text" class="form-control input rounded-0" placeholder="Digite uma música de referência" name="musica" required="">	


			<label form="labelFoto">Foto do concorrente:</label>
			<input type="file" class="form-control-file input" name="foto" required="">

			<input type="submit" value="Cadastrar" id="cadastro" class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-2 mt-2 ">

		</form> 
		
	</div>
	<a href="listar.php"><button class="btn btn-primary btn-sm btn-rounded font-weight-bold ">Listar Concorrentes</button></a>
</body>
</html>