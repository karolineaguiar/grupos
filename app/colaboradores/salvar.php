<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$salario = $_GET['salario'];
$mensagem = 'Salvo com sucesso';
 
$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$cadastro = 'INSERT INTO `colaboradores`(`nome`, `cpf`, `salario`, `empresa_id`) 
VALUES ("'.$nome.'", "'.$cpf.'","'.$salario.'", "'.$empresaId.'")';

if (!mysqli_query($conexaoBd, $cadastro)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /colaboradores/cadastro.php?mensagem=$mensagem");

?>