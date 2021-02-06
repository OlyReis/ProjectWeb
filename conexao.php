<?php 

$servidor ="localhost";
$usuario="root";
$senha="";
$bd="music";


$conexao= mysqli_connect($servidor, $usuario,$senha,$bd);


if (!$conexao){
	echo"Falha na conexão!!!";
}else{
	echo"Banco de dados conectado com sucesso.=)";
}





 ?>