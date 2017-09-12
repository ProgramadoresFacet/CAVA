<html>
  <head>
  </head>
  <body>
    
    <div class="row">
      <img src="<?=base_url('docs/logocava2017.png')?>">
    </div>
    <br>
    <div class="row">
      <?php foreach ($ticket as $ticket):?>
        <div class="datos">
          <table>
            <tr>
              <td>Nombre: &nbsp; &nbsp; &nbsp; &nbsp;</td>
              <td><h3><b><?=strtoupper($ticket->apellido)?>, <?=strtoupper($ticket->nombre)?></b></h3></td>
            </tr>
            <tr>
              <td>E-Mail: </td>
              <td><h3><b><?=$ticket->mail?></b></h3></td>
            </tr>
            <tr>
              <td>Rol:</td>
              <td><h3><b><?=$ticket->rol?></b></h3></td>
            </tr>
            <tr>
              <td>Pais:</td>
              <td><h3><b><?=$ticket->pais?></b></h3></td>
            </tr>
            <tr>
              <td>Trabajo:</td>
              <td><h3><b><?php 
                    if($ticket->titulo==NULL){
                      echo '-';
                    }else{
                      echo $ticket->titulo;                    
                    }
                  ?></b></h3></td>
            </tr>                        
          </table>
        </div>
        <br>
        <div class="datos">
          <table class="precio">
            <tr>
              <td class="tdgrande">Ticket de Pago N°:</td>
              <td>Pesos:</td>
              <td>Dolares:</td>
            </tr>
            <tr>
              <td><h2><b><?=$ticket->id_ticket?></b></h2></td>
              <td><h2><b>AR$ <?=number_format($ticket->pesos,2,',','');?></b></h2></td>
              <td><h2><b>U$S <?=number_format($ticket->pesos / $this->config->item('precio_cambio'),2,',','');?></b></h2></td>
            </tr>                      
          </table>
        </div>
      <?php endforeach; ?>
    </div>
    <br>
    
    <div class="datos">
      <h4>Completar con sus datos de Facturación:</h4>
      <br>
      <br>
    </div>

  </body>
</html>