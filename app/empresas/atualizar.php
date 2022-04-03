<?php

$id = $_GET['id'];
$nome = $_GET['nome'];
$tipo = $_GET['tipo'];
$valorMercado = $_GET['valor_mercado'];
$mensagem = 'Atualizado com sucesso';

$conexaoBd = mysqli_connect('localhost','root','password');
mysqli_select_db($conexaoBd, 'grupos');

$atualizacao = 'UPDATE `empresas` 
SET 
    nome = "'.$nome.'", tipo = "'.$tipo.'", valor_mercado = "'.$valorMercado.'"
WHERE id = "'.$id.'"
';

if (!mysqli_query($conexaoBd, $atualizar)) {
   $mensagem = mysqli_error($conexaoBd);
}

header("Location: /empresas/atualizar.php?id=$id&&mensagem=$mensagem");

?>