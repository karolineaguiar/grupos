<?php

$id = $_GET['id'];
$funcoes = $_GET['funcoes'];
$nivel = $_GET['nivel'];
$mensagem = 'atualizado com sucesso';

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$atualizacao = 'UPDATE `funcoes`
SET
    funcao = "'.$funcoes.'", nivel = "'.$nivel.'"
WHERE id = "'.$id.'"
';

if (!mysqli_query($conexaoBd, $atualizar)) {
    $mensagem = mysqli_error($conexaoBd);
 }

 header("Location: /funcoes/atualizar.php?id=$id&&mensagem=$mensagem");
 
?>