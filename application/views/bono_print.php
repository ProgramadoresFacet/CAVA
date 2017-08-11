<div>
  <img src="<?=base_url('docs/logocava.png')?>">
</div>
<div>
    <?php foreach ($ticket as $ticket):?>
    <p>Nombre: <?=$ticket->nombre?></p>
    <p>Apellido: <?=$ticket->apellido?></p>
    <p>E-Mail: <?=$ticket->mail?></p>
    <p>Rol: <?=$ticket->rol?></p>
    <p>Pais: <?=$ticket->pais?></p>
    <p>Pesos: <?=$ticket->pesos?></p>
    <p>Dolares: <?=$ticket->pesos / $this->config->item('precio_cambio')?></p>
    <p>Ticket Numero: <?=$ticket->id_ticket?></p>
    <p>Trabajo: <?php 
                  if($ticket->titulo==NULL){
                    echo '-';
                  }else{
                    echo $ticket->titulo;                    
                  }
                ?>
    <?php endforeach; ?>
</div>
