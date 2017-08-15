<html>
  <head>
  </head>
  <body>
    <div class="row">
      <?php foreach ($ticket as $ticket):?>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
      	<br>
        <div class="identi">
          <p>
          <h2><b><?=strtoupper($ticket->apellido)?>, <?=strtoupper($ticket->nombre)?></b></h2>
          <br>
          <h3><b>Participó como <?=$ticket->rol?></b></h3></p>
        </div>        
      <?php endforeach; ?>
    </div>
  </body>
</html>