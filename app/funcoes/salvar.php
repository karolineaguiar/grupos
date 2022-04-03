<?php
$funcao = $_GET['funcao'];
$nivel = $_GET['nivel'];
$colaboradoresId = $_GET['colaboradores_id'];
$mensagem = 'Salvo com sucesso';
 
$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$cadastro = 'INSERT INTO `funcoes`(`funcao`, `nivel`, `colaboradores_id`) 
VALUES ("'.$funcao.'", "'.$nivel.'", "'.$colaboradoresId.'")';

if (!mysqli_query($conexaoBd, $cadastro)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /funcoes/cadastro.php?mensagem=$mensagem");

?>