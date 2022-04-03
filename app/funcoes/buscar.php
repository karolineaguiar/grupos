<?php

$funcao= '';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $conexaoBd = mysqli_connect('localhost','root','password');

    mysqli_select_db($conexaoBd, 'grupos');

    $buscar = "SELECT * FROM funcoes WHERE id = $id";

    $funcao = mysqli_fetch_assoc(
        mysqli_query($conexaoBd, $buscar)
    );
}

?>