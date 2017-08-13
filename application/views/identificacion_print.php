<html>
  <head>
  </head>
  <body>
    <div class="row">
      <?php foreach ($ticket as $ticket):?>
        <div class="identi">
          <p class="identi">
          <h2><b><?=strtoupper($ticket->apellido)?>, <?=strtoupper($ticket->nombre)?></b></h2>
          <br>
          <h3><b><?=$ticket->rol?></b></h3></p>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>