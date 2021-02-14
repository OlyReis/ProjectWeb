<?php 
include("conexao.php");

function inserir($conexao, $dad, $destino){
	
	$script = 'INSERT INTO concorrentes VALUES (DEFAULT, "' . $dad[0] . '", "' . $dad[1] . '", "' . $destino . '",' . 0 . ')';

	$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo '<script>alert("Cadastro incorreto!")</script>';
		echo '<script>window.location="index.php"</script>';
	}else{
		echo "<br>Inserção Realizada corretamente!";
		echo '<script>alert("Cadastro feito com sucesso!")</script>';
		echo '<script>window.location="index.php"</script>';
	}
}


$dad = array($_POST['nome'], $_POST['musica']);
$dir= "img/";
$file= $_FILES['foto'];
$destino= "$dir".$file["name"];

move_uploaded_file($file['tmp_name'], $destino);

inserir($conexao,$dad,$destino);

 ?>