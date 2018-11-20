<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>En allant de 20 à 0 avec un pas de 1, afficher le message "C'est presque bon".</p>
    <?php
    $number = 20;
    while ($number >= 0) { ?>
    <p><?php echo $number.' '.'C\'est presque bon'; ?></p>
    <?php $number--; } ?>
  </body>
</html>
