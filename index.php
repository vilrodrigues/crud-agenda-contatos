<?php 

require_once 'config.php'; 

include(HEADER_TEMPLATE); 

?>

<h1>Painel</h1>

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="contatos/add.php" class="btn btn-primary">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-plus fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Novo Contato</p>
				</div>
			</div>
		</a>
	</div>
	<div class="col-xs-6 col-sm-3 col-md-2">
		<a href="contatos" class="btn btn-default">
			<div class="row">
				<div class="col-xs-12 text-center">
					<i class="fa fa-user fa-5x"></i>
				</div>
				<div class="col-xs-12 text-center">
					<p>Contatos</p>
				</div>
			</div>
		</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>