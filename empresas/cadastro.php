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
    <h3>Cadastre empresas em que deseje que tenha um registro feito, <br> informando seus respectivos dados.</h3>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Empresa
            </div>
            <form action="../app/empresas/salvar.php" method="get">
                <div class="card-body">
                    <label for="">Nome</label>
                    <input type="text" name="nome" class="form-control">
                    <label for="">Tipo</label>
                    <select name="tipo" class="form-control">
                        <option value="1">Pequeno</option>
                        <option value="2">Médio</option>
                        <option value="3">Grande</option>
                    </select>
                    <label for="">Valor de mercado</label>
                    <input type="float" name="valor_mercado" class="form-control">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-success btn-lg">Salvar</button>                   
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>