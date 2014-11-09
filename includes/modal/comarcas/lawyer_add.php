<div class="modal fade"  id="lawyer_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title">Comardddca</h4>
			</div>
			<div class="modal-body">
				<form role="form" action="includes/modal/comarcas/add.php" method="post" id="add_sumbit">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Nome" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="decjud">Decreto Judici&#225;rio</label>
									<input type="text" id="decjud" name="decjud" class="form-control" placeholder="Decreto Judici&#225;rio" />
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn_cancel" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-success" onclick="$('#add_sumbit').submit();">Salvar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
