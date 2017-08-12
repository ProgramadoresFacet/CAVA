<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Ticket</div>
			  			</div>
			  			
			  			<div class="content-box-large box-with-header">
				  			<div id="rootwizard">
								<div class="content-box-large box-with-header">									
					  				<form class="form-inline" role="form" method="post" action="<?=base_url('ticket/codigo')?>">										
										<fieldset>
											<div class="form-group col-md-6">
												<label class="sr-only" for="exampleInputEmail2">Codigo Ticket</label>
												<input type="number" name="codigo"  class="form-control" id="exampleInputEmail2" min="1" placeholder="N° de Ticket de Pago">
											</div>
											<button type="submit" class="btn btn-primary">
												Ver
											</button>
										</fieldset>
									</form>
								</div>
							</div>
							<?php 
								if(isset($alert))
									echo '<div class="alert alert-danger">
											  <strong>NUMERO NO VALIDO!</strong> El número ingresado no corresponde a un ticket activo.
											</div>';
								if(isset($mostrar))
									$this->load->view('codigo_view');
							?>
						</div>
</div>