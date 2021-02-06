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
	<h1 class="col-12">Cadastro dos concorrentes</h1><br>
	<div class="container col-12 divcadastro rounded border border-primary mb-5"> 
		<form class="needs-validation m-4" novalidate>
			<div class="form-row mb-3 mt-3">
				<label form="labelNome" class="mb-0">Nome</label> 
				<input type="text" class="form-control input rounded-0" placeholder="Digite o Nome do concorrente"  name="nome" required>
			</div>
			<div class="form-row">
				<label form="labelMusicaR" class="mb-0">Música de Referência</label>
				<input type="text" class="form-control input rounded-0" placeholder="Digite uma música de referência" name="cpf" required>	
			</div>
			<div class="form-group">
				<label form="labelFoto">Foto do concorrente</label>
				<input type="file" class="form-control-file input" name="foto" id="foto1" required>
			</div>
			<input type="submit" value="Cadastrar" id="cadastro" class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-2 mt-2 w-100">

		</form>
	</div>    
</body>
</html>