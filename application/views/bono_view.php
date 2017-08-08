<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Pagar bono</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
							
							<div class="alert alert-danger" role="alert">
							  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
							  <span class="sr-only">Aviso:</span>
							  Este partcipante es autor, cambiar el estado de una obra a pagado 
							  <a href="<?=base_url('trabajos/')?>" target="_blank">Cambiar estado</a>
							</div>

			  				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Mail</th>
										<th>Tipo</th>
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
										<td class="center">Autor</td>
										<td>Bolivia</td>
										<td class="center">Si</td>
										<td class="center"><a href="<?=base_url('participantes/update/44')?>"><span class="glyphicon glyphicon-edit"></span></td>
										<td class="center"><span class="glyphicon glyphicon-trash"></span></td>
									</tr>									
								</tbody>
							</table>

							<div class="row">
								
								<div class="form-group">
									<br>
								    <br>
								    <label for="inputPassword3" class="col-sm-2 control-label">Tipo pago</label>
								    <div class="col-sm-10">
								      <select class="form-control" id="inputPassword3" placeholder="">
								      	<option value="">Autor  U$ 150 - $ 2225</option>
								      	<option value="">Docente/investigador U$ 100 - $ 1725</option>
								      	<option value="">Docentes con 5 alumnos o más U$ 80 - $1685</option>
								      </select>
								    </div>
								</div>

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