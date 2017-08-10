<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Registrar participante</div>
			  			</div>
			  			<div class="content-box-large box-with-header">
				  			<div id="rootwizard">
								
								<div class="tab-content">
									<?php if( validation_errors() ) : ?>
									<div class="alert alert-danger" role="alert">
									 	<b><?= validation_errors()?></b>
									</div>
									<?php endif; ?>

									<?php if( isset($error_reg) ) : ?>
									<div class="alert alert-danger" role="alert">
									 	<b><?=$error_reg?></b>
									</div>
									<?php endif; ?>

									<?php if( isset($success_reg) ) : ?>
									<div class="alert alert-success" role="alert">
									 	<b><?=$success_reg?></b>
									</div>
									<?php endif; ?>

								    <div class="tab-pane active" id="tab1">
								      <form class="form-horizontal" role="form" method="post" action="<?=base_url('registrar/nuevo')?>">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputEmail3" name="nombre" value="<?=set_value('nombre')?>" required>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputPassword3" name="apellido" value="<?=set_value('apellido')?>" required>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Mail</label>
										    <div class="col-sm-10">
										      <input type="text" class="form-control" id="inputPassword3" name="mail" value="<?=set_value('mail')?>" required>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Rol</label>
										    <div class="col-sm-10">
										      <select name="id_rol" class="form-control" id="inputPassword3" required="">
										      	<?php foreach ($roles as $rol):?>
										      		<option value="<?=$rol->id_rol?>"><?=$rol->rol?></option>
										      	<?php endforeach;?>
										      </select>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Pais</label>
										    <div class="col-sm-10">
										      <select name="id_pais" class="form-control" id="inputPassword3" placeholder="">
										      	<?php foreach ($paises as $pais):?>
										      		<option value="<?=$pais->id_pais?>"><?=$pais->pais?></option>
										      	<?php endforeach;?>
										      </select>
										    </div>
										  </div>
										
								    </div>
								    <div class="tab-pane" id="tab2">
								    </div>
									<ul class="pager wizard">
									  	<input type="submit" class="btn btn-primary pull-right" value="Registrar">
									  	<a href="<?=base_url('registrar')?>" class="btn btn-default pull-right" style="margin-right:20px;">Limpiar formulario</a>
									</ul>
									</form>
								</div>	
							</div>
						</div>
</div>