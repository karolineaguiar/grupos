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
    <h3>Cadastre colaboradores em que deseje que tenha um registro feito, <br> informando seus respectivos dados.</h3>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Colaborador(a)
            </div>
            <form action="../app/colaboradores/salvar.php" method="get">
                <div class="card-body">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control">
                    <label for="">CPF</label>
                    <input type="int" name="cpf" class="form-control">
                    <label for="">Salário</label>
                    <input type="int" name="salario" class="form-control">
                    <label for="">Lista de Empresas</label>
                    <select name="empresa_id" class="form-control">
                        <?php
                            $conexaoBd = mysqli_connect('localhost','root','password'); 
                            mysqli_select_db($conexaoBd, 'grupos');

                            $buscas = "SELECT * FROM empresas";

                            $empresas = mysqli_query($conexaoBd, $buscas);

                            while($empresa = mysqli_fetch_array($empresas)):
                        ?>
                        <option value="<?php echo $empresa['id'] ?>">
                                        <?php echo $empresa['nome'] ?>
                                </option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success btn-lg">Salvar</button>                    
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>