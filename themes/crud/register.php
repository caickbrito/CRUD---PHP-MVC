<div class="col-md-6" id="form-area">
	<div class="col-md-6">
		<h2>Novo usuário</h2>
	</div>
	<form id="form-contact" action="<?= $router->route('web.registerPost'); ?>" method="POST">
		<input id="id" name="id" type="hidden">
		<input type="text" name="name" placeholder="Nome" class="form-control">
		<input type="text" name="last_name" placeholder="Sobrenome" class="form-control">
		<input type="text" name="email" placeholder="Email" class="form-control">
		<input type="text" name="phone" placeholder="Telephone" class="form-control">
		<button type="submit" class="btn btn-primary" name="adicionar" value="adicionar"id="btn-form">Add</button>
	</form>
</div>