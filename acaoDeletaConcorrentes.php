<?php
include("conexao.php");

function deletar ($conexao, $id) {
  $script = 'DELETE FROM concorrente WHERE id = "' . $id . '"';

  $deleta = $conexao->query($script);
  if(!$deleta){
    echo "<br>Alteração incorreta! Deu erro!<br>";
    echo $conexao->error;
    echo "<br><br>";
    echo $script;
    echo "<br>";
    echo '<script>alert("Deleção incorreta!")</script>';
    //echo '<script>window.location="listar.php"</script>';
  }else{
    echo "<br>Deleção Realizada corretamente!";
    echo '<script>alert("Deleção feita com sucesso!")</script>';
    echo '<script>window.location="listar.php"</script>';
  }
  
}
$id = $_GET['id'];
echo $id;
deletar($conexao, $id);
?>