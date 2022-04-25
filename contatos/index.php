<?php

require_once('functions.php');
index();

include(HEADER_TEMPLATE); 

?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Contatos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Contato</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($contatos) : ?>
    <?php foreach ($contatos as $contato) : ?>
        <tr>
            <td><?php echo $contato['id']; ?></td>
            <td><?php echo $contato['nome']; ?></td>
            <td class="actions text-left">
                <a href="view.php?id=<?php echo $contato['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                <a href="edit.php?id=<?php echo $contato['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                <a href="delete.php?id=<?php echo $contato['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<?php include(FOOTER_TEMPLATE); ?>