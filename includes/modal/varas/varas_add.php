<?php 
	$sql_comarca = "SELECT * FROM `comarcas` WHERE 1 ORDER BY `name` asc, `decjud` asc";
	$resultado_comarca = mysql_query($sql_comarca,$conexao) or die ("Erro na seleção da tabela.");
?>
<div class="modal fade"  id="lawyer_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title">Varas</h4>
			</div>
			<div class="modal-body">
				<form role="form" action="includes/modal/varas/add.php" method="post" id="add_sumbit">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="comarca_id">Varas</label>
									<select name="comarca_id" id="comarca_id" class="form-control">
										<option value="0" selected="selected">Selecione a Comarca</option>
										<?php while($prod = mysql_fetch_array($resultado_comarca)) { ?>
											<option value="<?php echo $prod['id'] ?>"><?php echo $prod['name'].' - '.$prod['decjud']; ?></option>
										<?php } ?>
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
				<button type="button" class="btn btn-success" onclick="$('#add_sumbit').submit();">Salvar</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->








