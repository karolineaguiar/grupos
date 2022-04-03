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

                        $buscas = "SELECT * FROM colaboradores";

                        $colaboradores = mysqli_query($conexaoBd, $buscas);

                        while($colaborador = mysqli_fetch_array($colaboradores)):
                    ?>
                        <tr>
                            <td><?php echo $colaborador['nome'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                    
                    <?php  

                        $conexaoBd = mysqli_connect('localhost','root','password'); 
                        mysqli_select_db($conexaoBd, 'grupos');
                                               
                        $buscas = "SELECT * FROM funcoes";

                        $funcoes = mysqli_query($conexaoBd, $buscas);

                        while($funcao = mysqli_fetch_array($funcoes)):
                    ?>
                        <tr>
                             <td><?php echo $funcao['funcao'] ?></td>
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
                        </tr>
                    <?php endwhile; ?>
 
                <?php  

                        $conexaoBd = mysqli_connect('localhost','root','password'); 
                        mysqli_select_db($conexaoBd, 'grupos');
                                                    
                        $buscas = "SELECT * FROM empresas";

                        $empresas = mysqli_query($conexaoBd, $buscas);

                        while($empresa = mysqli_fetch_array($empresas)):
                ?>

                    <tr>
                        <td><?php echo $empresa['nome'] ?></td>
                    </tr>
                   
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>