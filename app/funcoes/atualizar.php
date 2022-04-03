<?php

$id = $_GET['id'];
$funcao = $_GET['funcao'];
$nivel = $_GET['nivel'];
$colaboradoresId = $_GET['colaboradores_id'];
$mensagem = 'atualizado com sucesso';

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$atualizacao = 'UPDATE `funcoes`
SET
    funcao = "'.$funcao.'", nivel = "'.$nivel.'", colaboradores_id = "'.$colaboradoresId.'"
WHERE id = "'.$id.'"
';

if (!mysqli_query($conexaoBd, $atualizar)) {
    $mensagem = mysqli_error($conexaoBd);
 }

 header("Location: /funcoes/atualizar.php?id=$id&&mensagem=$mensagem");
 
?>