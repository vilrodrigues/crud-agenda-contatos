<?php 
    require_once('functions.php'); 
    edit();

    if(isset($_POST["delete"])){
        if (isset($_GET['id'])){

            delete($_GET['id']);
    
        } else {
    
            die("ERRO: ID não definido.");
        }
    }
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Contato</h2>

<form action="edit.php?id=<?php echo $contato['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-8">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="contato['nome']" value="<?php echo $contato['nome']; ?>">
        </div>

        <div class="form-group col-md-4">
            <label for="campo2">Data de Nascimento</label>
            <input type="text" class="form-control" name="contato['data_nascimento']" value="<?php echo $contato['data_nascimento']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <label for="campo3">Endereço</label>
            <input type="text" class="form-control" name="contato['endereco']" value="<?php echo $contato['endereco']; ?>">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            <label for="campo1">Telefone</label>
            <input type="text" class="form-control" name="contato['telefone']" value="<?php echo $contato['telefone']; ?>">
        </div>

        <div class="form-group col-md-6">
            <label for="campo2">Celular</label>
            <input type="text" class="form-control" name="contato['celular']" value="<?php echo $contato['celular']; ?>">
        </div>
    </div>

    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
            <button type="submit" name="delete" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir</button>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>