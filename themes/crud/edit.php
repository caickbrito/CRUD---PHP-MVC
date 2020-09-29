<?php $v->layout("_theme.php"); ?>

<div class="container d-flex justify-content-center">
	<div class="col-md-6" id="form-area">
		<div class="col-md-6">
			<h2>Atualizar contato de <?= $form->name; ?></h2>
		</div>
		<form id="form-contact" action="<?= $router->route('web.editPost'); ?>" method="POST">
			<input id="id" value="<?= $form->id; ?>" name="id" type="hidden">
			<input type="text" name="name" value="<?= $form->name; ?>" placeholder="Nome" class="form-control">
			<input type="text" name="last_name" value="<?= $form->last_name; ?>" placeholder="Sobrenome" class="form-control">
			<input type="text" name="email" value="<?= $form->email; ?>" placeholder="Email" class="form-control">
			<input type="text" name="phone" value="<?= $form->phone; ?>" placeholder="Telephone" class="form-control">
			<button type="submit" class="btn btn-primary" name="adicionar" value="adicionar"id="btn-form">Update</button>
		</form>
	</div>
</div>