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
    <h3>Adicione as funcionalidades dos colaboradores já listados anteriormente:</h3>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
               Funções
            </div>
        <form action="../app/funcoes/salvar.php" method="get">
                <div class="card-body">
                    <label for="">Função</label>
                    <input type="text" name="funcoes" class="form-control">
                    <label for="">Nivel</label>
                    <select name="nivel" class="form-control">
                        <option value="1">Júnior</option>
                        <option value="2">Pleno</option>
                        <option value="3">Sênio</option>
                    </select>
             
            <div class="card-footer">
                <button type="submit" class="btn btn-outline-success btn-lg">Salvar</button>                    
            </div>
        </form>
    </div>
    </div>
</div>

<?php include('../layout/footer.php'); ?>