<div class="modal fade"  id="lawyer_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title">Usu&#225;rios</h4>
			</div>
			<form role="form" action="includes/modal/usuarios/edit.php" method="post" id="edit_sumbit" data-toggle="validator">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" id="name" name="name" maxlength="200" class="form-control" placeholder="Nome" required/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">E-mail</label>
									<input type="email" id="email" name="email" maxlength="200" class="form-control" placeholder="E-mail" required/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="password">Senha</label>
									<input type="password" id="password" name="password" minlength="6" maxlength="20" class="form-control" placeholder="Senha" required/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<p style="font-weight: bold">Perfil</p>
									<div class="checkbox">
										<label for="isadmin"><input type="checkbox" id="isadmin" name="isadmin" />Administrador</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" id="id" name="id" />
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->