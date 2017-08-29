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
        <div class="identi">
          <p>
          <h1><b><?=strtoupper($ticket->apellido)?>, <?=strtoupper($ticket->nombre)?></b></h1>
          </p>
        </div>        
      <?php endforeach; ?>
    </div>
  </body>
</html>