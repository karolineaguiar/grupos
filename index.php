<?php 
    include('layout/header.php'); 
    include('layout/menu.php'); 

    $conexaoBd = mysqli_connect('localhost','root','password');
    mysqli_select_db($conexaoBd, 'grupos');

    $buscas = 'SELECT * FROM empresas';

    $quantidadeEmpresas = mysqli_num_rows(
        mysqli_query($conexaoBd, $buscas)
    );

    $buscas = 'SELECT * FROM colaboradores';

    $quantidadeColaboradores = mysqli_num_rows(
        mysqli_query($conexaoBd, $buscas)
    );

    ?>

<div class="row">
    <h1> O objetivo de ser criado a contagem de empresas e colaboradores 
    é para uma melhor compreensão da amplitude empresarial presente. <br>
    Quaisquer dúvidas, pressione no menu colaboradores e em seguida clique na palavra dúvidas.<br>
    Boa sorte!!
    </h1>
    <div class="col-6">
        <div class="card m-5 p-5"> 
            Empresas
            <p><?php echo $quantidadeEmpresas; ?></p>
        </div>
    </div>
    <div class="col-6">
        <div class="card m-5 p-5">
            Colaboradores
            <p><?php echo $quantidadeColaboradores; ?></p>
        </div>
    </div>
</div>

<?php include('layout/footer.php'); ?>