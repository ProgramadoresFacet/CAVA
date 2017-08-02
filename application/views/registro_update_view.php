<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Actualizar participante</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div id="rootwizard">
								
								<div class="tab-content">

									<div class="alert alert-success" role="alert">
									  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
									  <span class="sr-only">Aviso:</span>
									  Participante actualizado con exito
									</div>

								    <div class="tab-pane active" id="tab1">
								      <form class="form-horizontal" role="form">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
										    <div class="col-sm-10">
										      <input value="Juan Carlos" type="text" class="form-control" id="inputEmail3" placeholder="">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
										    <div class="col-sm-10">
										      <input value="Martinez"  type="text" class="form-control" id="inputPassword3" placeholder="">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Mail</label>
										    <div class="col-sm-10">
										      <input value="jcmartinez@mail.com" type="mail" class="form-control" id="inputPassword3" placeholder="">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Pagado</label>
										    <div class="col-sm-10">
										      <select class="form-control" id="inputPassword3" placeholder="">
										      	<option value="">Si</option>
										      	<option value="">No</option>
										      </select>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Tipo</label>
										    <div class="col-sm-10">
										      <select class="form-control" id="inputPassword3" placeholder="">
										      	<option value="">Autor</option>
										      	<option value="">Docente</option>
										      	<option value="">Alumno</option>
										      </select>
										    </div>
										  </div>
										</form>
								    </div>
								    <div class="tab-pane" id="tab2">
								    </div>
									<ul class="pager wizard">
									  	<li class="next"><a href="<?=base_url('bono')?>" style="background:#117cf3;color:white">Actualizar</a></li>
									</ul>
								</div>	
							</div>
						</div>
</div>