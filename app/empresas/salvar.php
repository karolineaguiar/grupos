<?php

$nome = $_GET['nome'];
$tipo = $_GET['tipo'];
$valorMercado = $_GET['valor_mercado'];
$mensagem = 'Salvo com sucesso';

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$cadastro = 'INSERT INTO 
`empresas`(`nome`, `tipo`, `valor_mercado`) 
VALUES ("'.$nome.'", "'.$tipo.'","'.$valorMercado.'")
';

if (!mysqli_query($conexaoBd, $cadastro)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /empresas/cadastro.php?mensagem=$mensagem");

?>
