<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>boucle</title>
  </head>
  <body>
    <?php
  for ($Count=0; $Count < 100 ; $Count+= 15) {
    # incrémentation par pas de 15 jusqu'à 100
    echo 'On tient le bon bout '. $Count. '<br/>';
  }
     ?>
  </body>
</html>
