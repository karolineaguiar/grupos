<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$cadastro = 'INSERT INTO `usuarios`( `nome`, `email`, `senha`) 
VALUES ("'.nome.'", "'.$email.'", "'.$senha.'") ';

header("Location: /index.php");

?>