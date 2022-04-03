<?php

$empresa = '';

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $conexaoBd = mysqli_connect('localhost','root','password');

    mysqli_select_db($conexaoBd, 'grupos');

    $buscar = "SELECT * FROM empresas WHERE id = $id";

    $empresa = mysqli_fetch_assoc(
        mysqli_query($conexaoBd, $buscar)
    );
}

?>