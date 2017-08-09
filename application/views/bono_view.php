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
											<form method="post" action="<?=base_url('Bono/registrar_asistencia')?>">
												<input type="hidden" value="<?=$idpersona?>" name="idpersona">

												<select class="form-control" name="tipopago">
													<?php foreach ($tipopago as $tipo):?>
														<?php if($pais != 'ARGENTINA'):?>
															<?php if($tipo->id_tipo_pago <= 8):?>
																<option value="<?=$tipo->id_tipo_pago?>"> <?= $tipo->tipo . ' &nbsp;&nbsp;&nbsp; - U$D' . $tipo->monto . ' &nbsp;&nbsp;&nbsp; - AR$'.($tipo->monto * $this->config->item('precio_cambio'))?></option>
															<?php endif; ?>	
														<?php else:?>
															<?php if($tipo->id_tipo_pago > 8):?>
																<option value="<?=$tipo->id_tipo_pago?>"> <?= $tipo->tipo . ' &nbsp;&nbsp;&nbsp; - U$D' . $tipo->monto . ' &nbsp;&nbsp;&nbsp; - AR$'.($tipo->monto * $this->config->item('precio_cambio'))?></option>
															<?php endif; ?>
														<?php endif; ?>
													<?php endforeach; ?>
												</select>
											
									</div>
									<div class="form-group">
											<br>
											<input class="form-control btn-warning" type="submit" value="Bono">
									</div>
									</form>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="profile">
							    	<h4>Lista de trabajos</h4>
									<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Titulo</th>
												<th>Pagado</th>
												<th>generar ticket</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($trabajos as $trabajo):?>
												<tr class="odd gradeX ">
													<td><?=$trabajo->titulo?></td>
													<td>
														<?php if($trabajo->estado != NULL): ?>
															<?=$trabajo->estado?>
															<?php 
																$url =  base_url("bono/registrar_trabajos/") .$idpersona.'/'. $trabajo->trabajo;
																$disable = 'disabled';
															?>
														<?php else :?>
															NO
															<?php 
																$url = ''; 
																$disable = '';
															?>
														<?php endif; ?>
													</td>
													<td><a class="btn btn-warning" href="<?=$url?>" <?=$disable?>>Imprimir</a></td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="messages">
							    	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
										<thead>
											<tr>
												<th>Titulo</th>
												<th>Tipo pago</th>
												<th>Monto</th>
												<th>Estado</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
										 <?php foreach ($trabajos_pagados as $pagados): ?>
											<tr class="odd gradeX ">
												<td><?php echo (is_null($pagados->titulo)) ? '-' : $pagados->titulo?></td>
												<td><?=$pagados->tipo?></td>
												<td><?=$pagados->monto?></td>
												<td><?=$pagados->estado?></td>
												<td><?php if($pagados->id_estado == 2): ?>
															<?php 
																$url =  base_url("bono/imprimir/") .$pagados->id_ticket;
																$disable = 'disabled';
																$link = '<a class="btn btn-warning" href="'. $url .'" disable>Reimprimir</a>';
															?>
														<?php else :?>
															<?php 
																$url = ''; 
																$disable = '';
																$link = '<a class="btn btn-success" disabled>Pagado</a>';
															?>
														<?php endif; ?>
														
														<?= $link ?>	
												</td>

											</tr>
										<?php endforeach;?>
										</tbody>
									</table>
							    </div>
							    <div role="tabpanel" class="tab-pane" id="settings">.asfasf</div>
							  </div>

							</div>

							</div>
						</div>
</div>

