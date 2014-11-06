<div class="modal fade"  id="lawyer_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title">Comarca</h4>
			</div>
			<div class="modal-body">
				<form action="#" role="form">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="comarca_id">Comarca</label>
									<select name="comarca_id" id="comarca_id" class="form-control">
										<option value="0" selected="selected">Selecione a Comarca</option> 
										<option value="1">Acre</option> 
										<option value="2">Alagoas</option> 
										<option value="3">Amazonas</option> 
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" id="name" name="name" class="form-control" placeholder="Nome" />
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-success">Salvar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->