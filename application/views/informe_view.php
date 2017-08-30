			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Informe de Pagos</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						<table class="table">
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
								<td><?=$ticket->fecha_ticket?></td>
								<td><?=$ticket->nombre?></td>
								<td><?=$ticket->apellido?></td>
								<td><?=$ticket->tipo?></td>	
								<td><?=$ticket->pesos?></td>								
							</tr>
							<?php $total = $total + $ticket->pesos; ?>
							<?php endforeach; ?>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td><b>TOTAL:</b></td>
								<td><b><?= $total ?></b></td>
							</tr>
			              </tbody>
			            </table>
  					</div>
  				</div>
  			</div>