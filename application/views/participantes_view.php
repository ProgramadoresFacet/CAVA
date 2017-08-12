<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Participantes</div>
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
										<th>Rol</th>
										<th>Pais</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($personas as $persona):?>
									<tr class="odd gradeX">
										<td><a href="<?=base_url('bono')?><?='/pagos/'.$persona->id_persona?>"><?=strtoupper($persona->nombre)?></a></td>
										<td><a href="<?=base_url('bono')?><?='/pagos/'.$persona->id_persona?>"><?=strtoupper($persona->apellido)?></a></td>
										<td><?=$persona->mail?></td>
										<td class="center"><?=$persona->rol?></td>
										<td class="center"><?=$persona->pais?></td>
										<td class="center"><a href="<?=base_url('registro')?><?='/modificar/'.$persona->id_persona?>"><span class="glyphicon glyphicon-edit"></span></a></td>
										<td class="center"><a href="<?=base_url('registro')?><?='/eliminar/'.$persona->id_persona?>" class="eliminar"><span class="glyphicon glyphicon-trash"></span></a></td>
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