<div class="modal fade"  id="lawyer_add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
				<h4 class="modal-title">Advogado</h4>
			</div>
			<form role="form" action="includes/modal/advogados/add.php" method="post" id="add_sumbit" data-toggle="validator">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="oab">OAB</label>
									<input type="text" id="oab" name="oab" class="form-control" placeholder="OAB" required/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="oabuf">Estado OAB</label>
									<select name="oabuf" id="oabuf" name="oabuf" class="form-control" required>
										<option value="" selected="selected">Selecione o Estado</option> 
										<option value="ac">Acre</option> 
										<option value="al">Alagoas</option> 
										<option value="am">Amazonas</option> 
										<option value="ap">Amapá</option> 
										<option value="ba">Bahia</option> 
										<option value="ce">Ceará</option> 
										<option value="df">Distrito Federal</option> 
										<option value="es">Espírito Santo</option> 
										<option value="go">Goiás</option> 
										<option value="ma">Maranhão</option> 
										<option value="mt">Mato Grosso</option> 
										<option value="ms">Mato Grosso do Sul</option> 
										<option value="mg">Minas Gerais</option> 
										<option value="pa">Pará</option> 
										<option value="pb">Paraíba</option> 
										<option value="pr">Paraná</option> 
										<option value="pe">Pernambuco</option> 
										<option value="pi">Piauí</option> 
										<option value="rj">Rio de Janeiro</option> 
										<option value="rn">Rio Grande do Norte</option> 
										<option value="ro">Rondônia</option> 
										<option value="rs">Rio Grande do Sul</option> 
										<option value="rr">Roraima</option> 
										<option value="sc">Santa Catarina</option> 
										<option value="se">Sergipe</option> 
										<option value="sp">São Paulo</option> 
										<option value="to">Tocantins</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cpf">CPF</label>
									<input type="text" id="cpf" name="cpf" pattern="[0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2}" class="form-control mask_cpf" placeholder="CPF" required/>
								</div>
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label for="name">Nome</label>
									<input type="text" id="name" id="cpf" class="form-control" placeholder="Nome completo" required/>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Telefone</label>
									<input type="text" id="phone" name="phone" class="form-control mask_phone" placeholder="Telefone" pattern="pattern="\([0-9]{2}\)[0-9]{4,5}-[0-9]{4}""/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="cellphone">Celular</label>
									<input type="text" id="cellphone" name="cellphone" class="form-control mask_phone" placeholder="Celular" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="email">E-mail</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="E-mail" />
								</div>
							</div>
						</div>
						<!--
						<div class="row">
							<div class="col-md-12">
								&nbsp;
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="cep">CEP</label>
									<input type="text" id="cep" class="form-control" placeholder="CEP" />
								</div>						
							</div>
							<div class="col-md-8">
								<div class="form-group">
									<label for="address">Endereço</label>
									<input type="text" id="address" class="form-control" placeholder="Endereço" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="number">Número</label>
									<input type="text" id="number" class="form-control" placeholder="Número" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="complement">Complemento</label>
									<input type="text" id="complement" class="form-control" placeholder="Complemento" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="neighborhood">Bairro</label>
									<input type="text" id="neighborhood" class="form-control" placeholder="Bairro" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8">
								<div class="form-group">
									<label for="city">Cidade</label>
									<input type="text" id="city" class="form-control" placeholder="Cidade" />
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="state">Estado</label>
									<input type="text" id="state" class="form-control" placeholder="Estado" />
								</div>
							</div>
						</div>
						-->
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-success">Salvar</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->