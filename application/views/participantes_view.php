<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Participantes</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
			  				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Mail</th>
										<th>Tipo</th>
										<th>Pagado</th>
										<th>Editar</th>
										<th>Eliminar</th>
									</tr>
								</thead>
								<tbody>
									<?php for($i=1; $i<100;$i++):?>
									<?php $url = base_url('participantes/update/').$i ?>
									<tr class="odd gradeX">
										<td>Sam<?=$i?></td>
										<td>Benzeti</td>
										<td>mail@contacto.com.ar</td>
										<td class="center">Autor</td>
										<td class="center"><a href="<?=base_url('bono')?>">Si</a></td>
										<td class="center"><a href="<?=$url?>"><span class="glyphicon glyphicon-edit"></span></a></td>
										<td class="center"><a href=""><span class="glyphicon glyphicon-trash"></span></a></td>
									</tr>
									<?php endfor; ?>									
								</tbody>
							</table>							
						</div>
</div>