<?php 

$servidor ="localhost";
$usuario="root";
$senha="";
$bd="music";


$conexao= mysqli_connect($servidor, $usuario,$senha,$bd);

$dad= array ($_POST['nome'],$_POST['musica'],$_POST['foto']);

if (!$conexao){
	echo"Falha na conexão!!!";
}else{
	echo"Banco de dados conectado com sucesso.=)";
}

function inserir($conexao, $dad){
	
	$script = 'INSERT INTO concorrentes VALUES (DEFAULT, "' . $dad[0] . '", "' . $dad[1] . '", "' . $dad[2] . '", 0)';

	$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
	}else{
		echo "<br>Inserção Realizada corretamente!";
	}
}

inserir($conexao,$dad);



 ?>