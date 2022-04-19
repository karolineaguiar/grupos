<?php

$id = $_GET['id'];
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$salario = $_GET['salario'];
$empresaId = $_GET['empresa_id'];
$funcaoId =  $_GET['funcao_id'];
$mensagem = 'atualizado com sucesso';

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$atualizacao = 'UPDATE `colaboradores`
SET
    nome = "'.$nome.'", cpf = "'.$cpf.'", salario = "'.$salario.'", empresa_id = "'.$empresaId.'", funcao_id = "'.funcaoId.'"
WHERE id = "'.$id.'"
';

if (!mysqli_query($conexaoBd, $atualizar)) {
    $mensagem = mysqli_error($conexaoBd);
 }

 header("Location: /colaboradores/atualizar.php?id=$id&&mensagem=$mensagem");
 
?>