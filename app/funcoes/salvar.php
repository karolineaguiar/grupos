<?php
$funcoes = $_GET['funcoes'];
$nivel = $_GET['nivel'];
$mensagem = 'Salvo com sucesso';
 
$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$cadastro = 'INSERT INTO `funcoes`(`funcoes`, `nivel`) 
VALUES ("'.$funcoes.'", "'.$nivel.'")';

if (!mysqli_query($conexaoBd, $cadastro)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /funcoes/cadastro.php?mensagem=$mensagem");

?>