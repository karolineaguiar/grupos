<?php
$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$salario = $_GET['salario'];
$empresaId = $_GET['empresa_id'];
$funcaoId = $_GET['funcao_id'];
$mensagem = 'Salvo com sucesso';
 
$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$cadastro = 'INSERT INTO `colaboradores`(`nome`, `cpf`, `salario`, `empresa_id`, `funcao_id`) 
VALUES ("'.$nome.'", "'.$cpf.'","'.$salario.'", "'.$empresaId.'", "'.$funcaoId.'")';

if (!mysqli_query($conexaoBd, $cadastro)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /colaboradores/cadastro.php?mensagem=$mensagem");

?>
