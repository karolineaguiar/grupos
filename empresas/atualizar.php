<?php
    include('../layout/header.php');
    include('../layout/menu.php');
    include('../app/empresas/buscar.php');
?>

<?php if (isset($_GET['mensagem'])): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['mensagem']; ?>
    </div>
<?php endif; ?>

<div class="row">
    <h3>Atualize dados da empresa em seu registro feito, <br> informando seus respectivos dados mudados.</h3>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Empresa
            </div>
            <form action="../app/empresas/atualizar.php" method="get">
                <input type="hidden" name="id" value="<?php echo $empresa['id']; ?>">
                <div class="card-body">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $empresa['nome']; ?>">
                    <label for="">Tipo</label>
                    <select name="tipo" class="form-control">
                        <option value="1" <?php echo $empresa['tipo'] == "1" ? "selected" : "" ?>>Pequeno</option>
                        <option value="2" <?php echo $empresa['tipo'] == "2" ? "selected" : "" ?>>Médio</option>
                        <option value="3" <?php echo $empresa['tipo'] == "3" ? "selected" : "" ?>>Grande</option>
                    </select>
                    <label for="">Valor de mercado</label>
                    <input type="float" name="valor_mercado" class="form-control" value="<?php echo $empresa['valor_mercado']; ?>">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success btn-lg">Salvar</button>                   
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>