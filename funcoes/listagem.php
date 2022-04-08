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
    <h3>Visualize a lista das funcionalidade dos colaboradores cadastradas até então:</h3>
    <div class="col-12">
        <div class="card">
            <h4>Funções</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Função</th>
                        <th>Nivel</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexaoBd = mysqli_connect('localhost','root','password'); 
                        mysqli_select_db($conexaoBd, 'grupos');

                        $buscas = "SELECT * FROM funcoes";

                        $funcoes = mysqli_query($conexaoBd, $buscas);

                        while($funcao = mysqli_fetch_array($funcoes)):
                    ?>
                        <tr>
                            <td><?php echo $funcao['id'] ?></td>
                            <td><?php echo $funcao['funcoes'] ?></td>
                            <td>
                                <?php if ($funcao['nivel'] == "1") {  ?>
                                    Júnior
                                <?php } elseif ($funcao['nivel'] == "2") { ?>
                                    Pleno
                                <?php } elseif ($funcao['nivel'] == "3") { ?>
                                    Sênior
                                <?php } else { ?>
                                    Desconhecido
                                <?php } ?>
                            </td>                          
                        
                            <td>
                                <a href="atualizar.php?id=<?php echo $funcao['id'] ?>" class="btn btn-warning">
                                    Atualizar
                                </a>
                                <a href="../app/funcoes/excluir.php?id=<?php echo $funcao['id'] ?>" class="btn btn-danger">
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