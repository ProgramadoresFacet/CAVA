			<div class="col-md-12 panel-info">
  				<div class="content-box-header panel-heading">
					<div class="panel-title">Informe de Pagos</div>
				</div>
  				<div class="content-box-large box-with-header">
  					<div id="rootwizard">
	  					<div class="table-responsive">
	  						<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
				              <thead>
				                <tr>
				                  <th>N° Ticket</th>
				                  <th>Fecha</th>
				                  <th>Nombre</th>
				                  <th>Apellido</th>
				                  <th>Tipo Pago</th>
				                  <th>Ar$</th>
				                </tr>
				              </thead>
				              <?php $total = 0; ?>
				              <tbody>
				                <?php foreach ($tickets as $ticket):?>
								<tr class="odd gradeX">
									<td><?=$ticket->id_ticket?></td>
									<td><?=date_format(date_create($ticket->fecha_ticket), 'd/m/Y h:m:s')?></td>
									<td><?=$ticket->nombre?></td>
									<td><?=$ticket->apellido?></td>
									<td><?=$ticket->tipo?></td>	
									<td><?='$ '.$ticket->pesos?></td>								
								</tr>
								<?php $total = $total + $ticket->pesos; ?>
								<?php endforeach; ?>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td><b>TOTAL:</b></td>
									<td><b><?= '$ '.$total ?></b></td>
								</tr>
				              </tbody>
				            </table>
	  					</div>
	  				</div>
  				</div>
  			</div>