<?php 

require_once('functions.php'); 
view($_GET['id']);

include(HEADER_TEMPLATE); 

?>

<h2>Contato <?php echo $contato['id']; ?></h2>
<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $contato['nome']; ?></dd>
	<dt>Data de Nascimento:</dt>
	<dd><?php echo $contato['data_nascimento']; ?></dd>
	<dt>Endereço:</dt>
	<dd><?php echo $contato['endereco']; ?></dd>
</dl>
<dl class="dl-horizontal">
	<dt>Telefone:</dt>
	<dd><?php echo $contato['telefone']; ?></dd>
	<dt>Celular:</dt>
	<dd><?php echo $contato['celular']; ?></dd>
</dl>
<div id="actions" class="row">
	<div class="col-md-12">
        <a href="edit.php?id=<?php echo $contato['id']; ?>" class="btn btn-primary">Editar</a>
        <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>