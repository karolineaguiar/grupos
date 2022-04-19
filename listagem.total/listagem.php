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

                        $buscas = "SELECT colaboradores.nome, empresas.nome, funcoes.funcoes, funcoes.nivel FROM colaboradores, empresas, funcoes 
                        where colaboradores.empresa_id = empresas_id funcoes.funcao_id = funcoes_id, funcoes.nivel = nivel";

                        $colaboradores = mysqli_query($conexaoBd, $buscas);

                        while($colaborador  = mysqli_fetch_array($colaboradores)):
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