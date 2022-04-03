<?php 
    include('../layout/header.php'); 
    include('../layout/menu.php'); 
?>

<?php if (isset($_GET['mensagem'])): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['mensagem']; ?>
    </div>
<?php endif; ?>

<div class="row">
    <h3>Visualize a lista de empresas cadastrados até então:</h3>
    <div class="col-12">
        <div class="card">
            <h4>Empresas</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Valor de Mercado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexaoBd = mysqli_connect('localhost','root','password'); 
                        mysqli_select_db($conexaoBd, 'grupos');

                        $buscas = "SELECT * FROM empresas";

                        $empresas = mysqli_query($conexaoBd, $buscas);

                        while($empresa = mysqli_fetch_array($empresas)):
                    ?>
                        <tr>
                            <td><?php echo $empresa['id'] ?></td>
                            <td><?php echo $empresa['nome'] ?></td>
                            <td>
                                <?php if ($empresa['tipo'] == "1") {  ?>
                                    Pequena
                                <?php } elseif ($empresa['tipo'] == "2") { ?>
                                    Média
                                <?php } elseif ($empresa['tipo'] == "3") { ?>
                                    Grande
                                <?php } else { ?>
                                    Desconhecido
                                <?php } ?>
                            </td>

                            <td><?php echo $empresa['valor_mercado'] ?></td>
                            <td>
                                <a href="atualizar.php?id=<?php echo $empresa['id'] ?>" class="btn btn-warning">
                                    Atualizar
                                </a>
                                <a href="../app/empresas/excluir.php?id=<?php echo $empresa['id'] ?>" class="btn btn-danger">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>