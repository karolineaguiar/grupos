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
    <h3>Visualize a lista de colaboradores cadastrados até então:</h3>
    <div class="col-12">
        <div class="card">
            <h4>Colaboradores</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                         <th>CPF</th>
                        <th>Salário</th>
                        <th>Empresa</th>
                        <th>Função</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $conexaoBd = mysqli_connect('localhost','root','password'); 
                        mysqli_select_db($conexaoBd, 'grupos');

                        $buscas = "SELECT * colaboradores , empresas.nome, funcoes.funcoes AS empresa, funcao FROM colaboradores, empresas, funcoes
                        JOIN empresas, funcoes ON colaboradores.empresa_id = empresas.id , colaboradores.funcao_id = funcoes_id ";
                        
                        $colaboradores = mysqli_query($conexaoBd, $buscas);

                        while($colaborador = mysqli_fetch_array($colaboradores)):
                    ?>
                    <tr>
                        <td><?php echo $colaborador['id'] ?></td>
                        <td><?php echo $colaborador['nome'] ?></td>
                        <td><?php echo $colaborador['cpf'] ?></td>
                        <td><?php echo $colaborador['salario'] ?></td>
                        <td><?php echo $colaborador['empresa_id'] ?></td>
                        <td><?php echo $colaborador['funcao_id']?></td>
                        <td>
                            <a href="atualizar.php?id=<?php echo $colaborador['id'] ?>" class="btn btn-warning">
                                Atualizar
                            </a>
                            
                            <a href="../app/colaboradores/excluir.php?id=<?php echo $colaborador['id'] ?>" class="btn btn-danger">
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

<?php include('../layout/footer.php');?>