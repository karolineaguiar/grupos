<?php
    include('../layout/header.php');
    include('../layout/menu.php');
    include('../app/funcoes/buscar.php');
?>

<?php if (isset($_GET['mensagem'])): ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_GET['mensagem']; ?>
    </div>
<?php endif; ?>

<div class="row">
    <h3>Atualize as funções do seu registro feito, <br> informando seus respectivos dados alterados.</h3>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Função
            </div>
            <form action="../app/funcoes/atualizar.php" method="get">
                <input type="hidden" name="id" value="<?php echo $funcao['id']; ?>">
                <div class="card-body">
                    <label for="">Função</label>
                    <input type="text" name="funcoes" class="form-control" value="<?php echo $funcao['funcoes']; ?>">
                    <label for="">Nivel</label>
                    <select name="nivel" class="form-control">
                        <option value="1" <?php echo $funcao['nivel'] == "1" ? "selected" : "" ?>>Júnior</option>
                        <option value="2" <?php echo $funcao['nivel'] == "2" ? "selected" : "" ?>>Pleno</option>
                        <option value="3" <?php echo $funcao['nivel'] == "3" ? "selected" : "" ?>>Sẽnior</option>
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