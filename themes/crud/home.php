<?php $v->layout("_theme.php"); ?>




<div class="container d-flex justify-content-center" id="table-container">
	<div class="row">			
		<div class="container-table">
			<h2>Lista de contatos:</h2>			
				<?php if (!$users): ?>
					<h3>Não existem contatos cadastrados!</h3>				
					<?php else: ?>
						<table class="table">
							<thead>
								<tr>						
									<th class="th-table" scope="col">Name</th>
									<th class="th-table" scope="col">Lastname</th>
									<th class="th-table" scope="col" id="email-table">Email</th>
									<th class="th-table" scope="col" id="phone-table">Phone</th>
								</tr>
							</thead>				
							<?php foreach ($users as $user):?>
								<tbody>					
									<tr>
										<td><?= $user->name;?></td>
										<td><?= $user->last_name;?></td>
										<td id="email-tbody"><?= $user->email;?></td>
										<td id="email-tbody"><?= $user->phone;?></td>
										<td><a href="<?= $router->route('web.edit',['id' =>  $user->id]);?>" id=""><button id="btn-editar" class="btn btn-outline-primary"><i class="fas fa-edit"></i></button></a></td>
										<td><a href="<?= $router->route("web.delete", ["id" => $user->id]);?>" data-confirm="Tem certeza que deseja excluir esse contato?"><button class="btn btn-outline-danger" aria-hidden="true"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
									</tr>					
								</tbody>
							<?php endforeach; ?>							
						</table>
					<?php endif; ?>		
				</div>							
			</div>
		</div>	


	</div>
	<div class="d-flex justify-content-center btn-add">
		<a href="#" data-toggle="modal" data-target="#siteModal"><button type="button" class="btn btn-success">Add</button></a>
	</div>
	<div class="div-paginator d-flex justify-content-center text-center"><?=$paginator; ?></div>


	<!-- Modal --> 
	<div class="modal fade"  tabindex="-1" role="dialog" id="siteModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title">Novo contato</h2>
					<button class="close" type="button" data-dismiss="modal"><span>x</span></button>
				</div>
				<div class="modal-body">
					<form  id="form-modal" action="<?= $router->route("web.registerPost"); ?>" method="POST">
						<div class="login_form_callback"></div>
						<input id="id" name="id" type="hidden">
						<input type="text" name="name" placeholder="Nome" class="form-control">
						<input type="text" name="last_name" placeholder="Sobrenome" class="form-control">
						<input type="text" name="email" placeholder="Email" class="form-control">
						<input type="text" name="phone" placeholder="Telephone" class="form-control">
						<button type="submit" class="btn btn-primary" name="adicionar" value="adicionar"id="btn-form">Add</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php $v->start("scripts"); ?>
	<script type="text/javascript" src="<?= asset("js/scripts.js"); ?>"></script>
	<?php $v->end(); ?>

	<!-- FIM MODAL -->

