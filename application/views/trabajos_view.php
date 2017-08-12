<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Trabajos Inscriptos</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
			  				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>Nombre del Trabajo</th>
										<th>Pagado</th>										
									</tr>
								</thead>
								<tbody>	
									<?php foreach($trabajos as $trabajo): ?>								
									<tr style="cursor:pointer" class="odd gradeX open_modal" type="button" class="btn btn-info btn-lg" data-idtrabajo="<?=$trabajo->trabajo?>" data-idpersona="<?=(is_null($trabajo->id_persona)) ? 0 : $trabajo->id_persona ?>" data-estado="<?=(is_null($trabajo->estado)) ? 'NO' : $trabajo->estado?>" data-toggle="modal" data-target="#myModal"> <!-- Modal -->
										<td><?=$trabajo->titulo?></td>
										<?php if($trabajo->estado != null): ?>
											<td><?=$trabajo->estado?></td>
										<?php else: ?>
											<td>NO</td>
										<?php endif; ?>
									</tr>									
									<?php endforeach;?>								
								</tbody>
							</table>							
						</div>
						

						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h5 class="modal-title">Nombre del Trabajo</h5>
						      </div>
						      <div class="modal-body">

						      	<div class="alert alert-success" role="alert" id="t_si" style="display:none">
								  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								  <b>Trabajo pagado.</b> Se enviará el certificado al autor seleccionado.
								</div>

								<div class="alert alert-warning" role="alert" id="t_tramite" style="display:none">
								  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								  <b>Trabajo con pago en tramite.</b> Se enviará el certificado al autor seleccionado una vez pagado.
								</div>

								<div class="alert alert-danger" role="alert" id="t_no" style="display:none">
								  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								  <b>Trabajo no pagado.</b> Ningun autor pagó por este trabajo.
								</div>
						      	
						        <form>
									<table class="table">
						              <thead>
						                <tr>
						                  <th>Nombre</th>
						                  <th>Apellido</th>
						                  <th>Mail</th>
						                  <th>&nbsp;</th>
						                </tr>
						              </thead>
						              <tbody id="mails">
						              </tbody>
						            </table>
								</form>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						      </div>
						    </div>

						  </div>
						</div>
</div>

