<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Ticket</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div id="rootwizard">
								<div class="content-box-large box-with-header">
					  				<form class="form-inline" role="form" method="post" action="<?=base_url('ticket/codigo')?>">
									
										<fieldset>
											<div class="form-group col-sm-3">
												<label class="sr-only" for="exampleInputEmail2">Codigo Ticket</label>
												<input type="number" name="codigo"  class="form-control" id="exampleInputEmail2" placeholder="Enter email">
											</div>
											<button type="submit" class="btn btn-primary">
												Pagar
											</button>
										</fieldset>
									</form>
								</div>
							</div>
							<?php 
								if(isset($mostrar))
									$this->load->view('codigo_view');
							?>
						</div>
</div>