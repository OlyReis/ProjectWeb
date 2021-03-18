<?php
include("conexao.php");

function alterar ($conexao, $id, $nome, $musica, $destinoFoto) {
  $script = 'UPDATE concorrente SET nome = "' . $nome . '", musica = "' . $musica . '", foto = "' . $destinoFoto . '" WHERE id = ' . $id;

  $altera = $conexao->query($script);
  if(!$altera){
    echo "<br>Alteração incorreta! Deu erro!<br>";
    echo $conexao->error;
    echo "<br><br>";
    echo $script;
    echo "<br>";
    echo '<script>alert("Alteração incorreta!")</script>';
    echo '<script>window.location="editar.php"</script>';
  }else{
    echo "<br>Alteração Realizada corretamente!";
    echo '<script>alert("Alteração feita com sucesso!")</script>';
    echo '<script>window.location="editar.php"</script>';
  }
  
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$musica = $_POST['musica'];
$dir= "img/";
$file= $_FILES['foto'];
$destinoFoto= "$dir".$file["name"];
echo $id;


move_uploaded_file($file['tmp_name'], $destinoFoto);

alterar($conexao, $id, $nome, $musica, $destinoFoto);
?>