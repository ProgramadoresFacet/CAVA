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
									<?php foreach ($personas as $persona):?>
									<?php $pais = $persona->pais?>
									<tr class="odd gradeX">
										<td><a href="<?=base_url('bono')?><?='/pagos/'.$persona->id_persona?>"><?=$persona->nombre?></a></td>
										<td><a href="<?=base_url('bono')?>"><?=$persona->apellido?></a></td>
										<td><?=$persona->mail?></td>
										<td class="center"><?=$persona->rol?></td>
										<td class="center"><?=$persona->pais?></td>
										<td class="center"><a href=""><span class="glyphicon glyphicon-edit"></span></a></td>
										<td class="center"><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
									</tr>	
									<?php endforeach; ?>								
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
											<label>Tipo de pago</label>
											<select class="form-control">
												<?php foreach ($tipopago as $tipo):?>
													<?php if($pais != 'ARGENTINA'):?>
														<?php if($tipo->id_tipo_pago <= 8):?>
															<option value=""><?= $tipo->tipo . ' $' . $tipo->monto?></option>
														<?php endif; ?>	
													<?php else:?>
														<?php if($tipo->id_tipo_pago > 8):?>
															<option value=""><?= $tipo->tipo . ' $' . $tipo->monto?></option>
														<?php endif; ?>
													<?php endif; ?>
												<?php endforeach; ?>
											</select>
									</div>
									<div class="form-group">
											<br>
											<input class="form-control btn-warning" placeholder="Password" type="submit" value="mypassword">
									</div>
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

