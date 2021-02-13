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

	<title> Listar Concorrentes </title>
</head>
<body style="margin: 100px 20% 0 15%;">

	<h1 align="center" class="mb-4">Lista de Concorrentes</h1>
		<div class="row-mb-5" style="display: inline-flex;">
			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="img/294430.jpg">
					<div class="card-body">
						<h4 class="card-titile"> Nome</h4>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Musica do concorrente</li>
						<li class="list-group-item"> id </li>
						<li class="list-group-item"> votos </li>
					</ul>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="img/terra.jpg">
					<div class="card-body">
						<h4 class="card-titile"> Nome</h4>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Musica do concorrente</li>
						<li class="list-group-item"> id </li>
						<li class="list-group-item"> votos </li>
					</ul>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="card">
					<img class="card-img-top" src="img/tigre.jpg">
					<div class="card-body">
						<h4 class="card-titile"> Nome</h4>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Musica do concorrente</li>
						<li class="list-group-item"> id </li>
						<li class="list-group-item"> votos </li>
					</ul>
				</div>
			</div>
		</div>
</body>
</html>