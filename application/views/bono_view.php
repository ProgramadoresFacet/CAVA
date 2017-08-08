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
										<th>Pagado</th>
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
										<td class="center">No</td>
										<td class="center"><a href="<?=base_url('participantes/update/44')?>"><span class="glyphicon glyphicon-edit"></span></td>
										<td class="center"><span class="glyphicon glyphicon-trash"></span></td>
									</tr>									
								</tbody>
							</table>

							<select class="form-control">
								<option value="">Autor</option>
								<option value="">Docente 5 alumnos</option>
								<option value="">ponente</option>
								<option value="">alumno posgrado</option>
							</select>


								<h3>Lista de trabajos</h3>
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Titulo</th>
										<th>check</th>
									</tr>
								</thead>
								<tbody>
									<?php for($i=1; $i<3;$i++):?>
									<?php $url = base_url('participantes/update/').$i ?>
									<tr class="odd gradeX ">
										<td>Trabajo Nº<?=$i?></td>
										<td><input type="checkbox"></td>
									</tr>
									<?php endfor; ?>	
									
									<?php for($i=1; $i<3;$i++):?>
									<?php $url = base_url('participantes/update/').$i ?>
									<tr class="odd gradeX btn-warning">
										<td>Trabajo Nº<?=$i?></td>
										<td><input type="checkbox"></td>
									</tr>
									<?php endfor; ?>

									<?php for($i=1; $i<3;$i++):?>
									<?php $url = base_url('participantes/update/').$i ?>
									<tr class="odd gradeX btn-success">
										<td>Trabajo Nº<?=$i?></td>
										<td><input type="checkbox"></td>
									</tr>
									<?php endfor; ?>	

								</tbody>
							</table>



								<div class="col-md-6">
									<div class="well" style="margin-top:30px;">
				                        <button type="button" class="btn btn-lg btn-block btn-warning">Generar Bono</button>
		                            </div>
								</div>
								<div class="col-md-6">
									<div class="well" style="margin-top:30px;">
				                        <button type="button" class="btn btn-lg btn-block btn-success">Generar Sticker</button>
		                            </div>
								</div>
							</div>
						</div>
</div>