<?php

$id = $_GET['id'];
$mensagem = 'Excluído com sucesso';

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$excluir = "DELETE FROM colaboradores WHERE id = $id";

if (!mysqli_query($conexaoBd, $excluir)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /colaboradores/listagem.php?mensagem=$mensagem");

?>