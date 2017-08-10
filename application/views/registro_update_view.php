<div class="col-md-12 panel-info">
			  			<div class="content-box-header panel-heading">
		  					<div class="panel-title ">Actualizar participante</div>
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
								      <form class="form-horizontal" role="form" method="post" action="<?=base_url('registro/actualizar')?>">
										  <div class="form-group">
										    <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
										    <div class="col-sm-10">
										      <input name="nombre" value="<?php echo (isset($nombre)) ? $nombre : set_value('nombre')?>" type="text" class="form-control" id="inputEmail3" placeholder="">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Apellido</label>
										    <div class="col-sm-10">
										      <input name="apellido" value="<?php echo (isset($apellido)) ? $apellido : set_value('apellido')?>"  type="text" class="form-control" id="inputPassword3" placeholder="">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Mail</label>
										    <div class="col-sm-10">
										      <input name="mail" value="<?php echo (isset($mail)) ? $mail : set_value('mail')?>" type="mail" class="form-control" id="inputPassword3" placeholder="">
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Rol</label>
										    <div class="col-sm-10">
										        <select name="id_rol" class="form-control" id="inputPassword3" required="">
											      	<?php foreach ($roles as $rol):?>
											      		<?php if($rol->id_rol == $id_rol): ?>
											      			<option value="<?=$rol->id_rol?>" selected><?=$rol->rol?></option>
											      		<?php else: ?>
											      			<option value="<?=$rol->id_rol?>"><?=$rol->rol?></option>
											      		<?php endif;?>
											      	<?php endforeach;?>
										        </select>
										    </div>
										  </div>
										  <div class="form-group">
										    <label for="inputPassword3" class="col-sm-2 control-label">Pais</label>
										    <div class="col-sm-10">
										      <select name="id_pais" class="form-control" id="inputPassword3" placeholder="">
										      	<?php foreach ($paises as $pais):?>
										      		<?php if($pais->id_pais == $id_pais): ?>
										      			<option value="<?=$pais->id_pais?>" selected><?=$pais->pais?></option>
										      		<?php else: ?>
										      			<option value="<?=$pais->id_pais?>"><?=$pais->pais?></option>
										      		<?php endif;?>
										      	<?php endforeach;?>
										      </select>
										    </div>
										  </div>
								    </div>
								    <div class="tab-pane" id="tab2">
								    </div>
									<ul class="pager wizard">
										<input type="hidden" value="<?php echo (isset($id_persona)) ? $id_persona : '' ?>" name="id_persona">
									  	<input type="submit" class="btn btn-primary pull-right" value="Actualizar">
									</ul>
									</form>
								</div>	
							</div>
						</div>
</div>