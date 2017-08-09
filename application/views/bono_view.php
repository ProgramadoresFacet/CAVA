<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Pagar bono</div>
			  			</div>
			  			<div class="content-box-large box-with-header">

			  				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Mail</th>
										<th>Rol</th>
										<th>Pais</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td>Juan Carlos</td>
										<td>Perez</td>
										<td>maildecontacto@gmail.com</td>
										<td class="center">Ponente</td>
										<td>Colombia</td>
										<td class="center"><a href="<?=base_url('participantes/update/44')?>"><span class="glyphicon glyphicon-edit"></span></td>
										<td class="center"><span class="glyphicon glyphicon-trash"></span></td>
									</tr>									
								</tbody>
							</table>

							<!-- {} -->
							<br><br>
							<div>

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Pagar por asistencia</a></li>
							    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Pagar por trabajo</a></li>
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Pagos realizados</a></li>
							  </ul>

							  <!-- Tab panes -->
							  <br>
							  <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active" id="home">
								    	<div class="form-group col-md-12">
								    	<br>
											<label>Tipo de pago</label>
										</div>
										<div class="form-group col-md-6">
											<select class="form-control">
												<option value="">docente/investigador</option>
												<option value="">alumno posgrado</option>
												<option value="">alumno sin trabjo</option>
											</select>
										</div>										
										<div class="form-group col-md-6">												
											<input class="form-control btn-warning" placeholder="Password" type="submit" value="mypassword">
										</div>
										<br>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="profile">
								    	<h4>Lista de trabajos</h4>
										<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>Titulo</th>
													<th>generar ticket</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX ">
													<td>Trabajo</td>
													<td><input type="button" class="btn btn-warning" value="imprimir"></td>
												</tr>
												<tr class="odd gradeX ">
													<td>Trabajo</td>
													<td><input type="button" class="btn btn-warning" value="imprimir"></td>
												</tr>
												<tr class="odd gradeX ">
													<td>Trabajo</td>
													<td><input type="button" class="btn btn-primary" value="pagado" disabled=""></td>
												</tr>
											</tbody>
										</table>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="messages">
								    	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>Titulo</th>
													<th>Fecha</th>
													<th>Tipo pago</th>
													<th>Estado</th>
												</tr>
											</thead>
											<tbody>
												<tr class="odd gradeX ">
													<td>Trabajo 1</td>
													<td>14/7/2017</td>
													<td>Autor</td>
													<td>Pagado</td>
												</tr>
												<tr class="odd gradeX ">
													<td>Trabajo 1</td>
													<td>14/7/2017</td>
													<td>Autor</td>
													<td>Pagado</td>
												</tr>
												
											</tbody>
										</table>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="settings">.asfasf</div>
							  </div>

							</div>

							</div>
						</div>
</div>

