<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Certificados Pagados</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
							
							<?php if(isset($eliminado)): ?>
							<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Error:</span>
							  Partcipante eliminado
							</div>
							<?php endif; ?>

			  				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Mail</th>
										<th>Vista previa del certificado</th>
										<th>Estado del Certificado</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($personas as $persona):?>
									<tr class="odd gradeX">
										<td><a href="<?=base_url('bono')?><?='/pagos/'.$persona->id_persona?>"><?=strtoupper($persona->nombre)?></a></td>
										<td><a href="<?=base_url('bono')?><?='/pagos/'.$persona->id_persona?>"><?=strtoupper($persona->apellido)?></a></td>
										<td class="center"><?=$persona->mail?></td>
										<td class="center"><a target="_blank" href="<?=base_url('certificados/vista_previa/')?><?=$persona->id_ticket?>">VER</a></td>
										<td class="center estado-td"><?=$persona->estado_certificado?></td>
										<td class="center">
											<?php if($persona->id_estado_certificado == 1): ?>
												<a data-id-ticket="<?=$persona->id_ticket?>" class="btn btn-warning enviar-mail">Enviar</a>
											<?php else: ?>
												<a class="btn btn-success">Enviado</a>
											<?php endif; ?>
										</td>
									</tr>
									<?php endforeach; ?>									
								</tbody>
							</table>							
						</div>

						<div class="row">
							<div class="col-md-12">
								<a href="<?=base_url('registro')?>" class="btn btn-lg btn-block btn-primary">Registrar</a>
							</div>
						</div>
</div>