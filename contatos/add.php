<?php 
    
require_once('functions.php'); 
  
if(isset($_POST["salvar"])){
    add();
}

?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Contato</h2>

<form action="add.php" method="post">
    <div class="row">
        <div class="form-group col-md-8">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="contato['nome']">
        </div>
        <div class="form-group col-md-4">
            <label for="campo2">Data de Nascimento</label>
            <input type="date" class="form-control" name="contato['data_nascimento']">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <label for="campo3">Endereço</label>
            <input type="text" class="form-control" name="contato['endereco']">
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="campo1">Telefone</label>
            <input type="text" class="form-control" name="contato['telefone']">
        </div>
        <div class="form-group col-md-6">
            <label for="campo2">Celular</label>
            <input type="text" class="form-control" name="contato['celular']">
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
            <a href="index.php" class="btn btn-default">Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>