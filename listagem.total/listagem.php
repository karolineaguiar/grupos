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
    <h3>Visualize a lista com os colaboradores e suas funções:</h3>
    <div class="col-12">
        <div class="card">
            <h4>Colaboradores/Funções</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Colaborador</th>
                        <th>Função</th>
                        <th>Nivel</th>
                        <th>Empresa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexaoBd = mysqli_connect('localhost','root','password'); 
                        mysqli_select_db($conexaoBd, 'grupos');

                        $buscas = "SELECT *, empresas.nome FROM colaboradores, empresas where colaboradores.empresa_id = empresas_id ";

                        $listagens = mysqli_query($conexaoBd, $buscas);

                        while($listagem  = mysqli_fetch_array($listagens)):
                    ?>
                        <tr>
                            <td><?php echo $colaborador['nome'] ?></td>
                            <td><?php echo $empresa['nome'] ?></td>
                            <td><?php echo $funcao['funcoes'] ?></td>
                            <td><?php echo $funcao['nivel'] ?></td>

                        </tr> 
                    <?php endwhile; ?>
              
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>