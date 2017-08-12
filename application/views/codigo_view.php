<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Mail</th>
			<th>Rol</th>
			<th>Tipo pago</th>
			<th>Estado</th>
			<th>Titulo</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tickets as $ticket):?>
		<tr class="odd gradeX">
			<td><?=$ticket->nombre?></td>
			<td><?=$ticket->apellido?></td>
			<td><?=$ticket->mail?></td>
			<td><?=$ticket->rol?></td>
			<td><?=$ticket->tipo?></td>
			<td><?=$ticket->estado?></td>
			<td><?php echo (is_null($ticket->titulo)) ? ' - ' : $ticket->titulo ?></td>
		</tr>
		<?php $idticket = $ticket->id_ticket; ?>
		<?php $estado = $ticket->id_estado;?>
		<?php endforeach; ?>								
	</tbody>
</table>

<div class="row">
	<div class="content-box-large box-with-header">
		<form class="form-inline" role="form">
			<?php 
				$disabled = '';
				if($estado == 3){
					echo '<div class="alert alert-success">
  							<strong>PAGADO!</strong> El ticket se encuentra PAGADO.
							</div>';
					$disabled = 'disabled';
				}
			?>
		
			<fieldset>
				<div class="form-group col-sm-3">
					<label class="sr-only" for="exampleInputEmail2">Cambiar estado</label>
					<a class="form-control btn btn-primary" href="<?=base_url('ticket/cambiar_a_pagado/')?><?=$idticket?>" <?=$disabled?>>Cambiar estado</a>
				</div>
				<div class="form-group  col-sm-3">
					<label class="sr-only" for="exampleInputPassword2">Imprimir</label>
					<a class="form-control btn btn-success">Imprimir</a>
				</div>
			</fieldset>
			
		</form>
	</div>
</div>