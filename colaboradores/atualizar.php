<?php
    include('../layout/header.php');
    include('../layout/menu.php');
    include('../app/colaboradores/buscar.php');
?>

<?php if (isset($_GET['mensagem'])): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['mensagem']; ?>
    </div>
<?php endif; ?>

<div class="row">
    <h3>Atualize colaboradores em que deseje que tenha um registro feito, <br> informando seus respectivos dados.</h3>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Colaborador(a)
            </div>
            <form action="../app/colaboradores/atualizar.php" method="get">
            <input type="hidden" name="id" value="<?php echo $colaborador['id']; ?>">
                <div class="card-body">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $colaborador['nome'];?>">
                    <label for="">CPF</label>
                    <input type="int" name="cpf" class="form-control" value="<?php echo $colaborador['cpf'];?>">
                    <label for="">Salário</label>
                    <input type="int" name="salario" class="form-control" value="<?php echo $colaborador['salario'];?>">
                    <label for="">Lista de Empresas</label>
                    <select name="empresa_id" class="form-control">
                    <option value="1" <?php echo $colaborador['empresa_id'] == "1" ? "selected" : "" ?>>Loja Americana</option>
                    <option value="2" <?php echo $colaborador['empresa_id'] == "2" ? "selected" : "" ?>>big big</option>

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