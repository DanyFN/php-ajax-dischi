<!-- richiamo il databse -->
<?php include __DIR__ . '/database.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title></title>
  </head>
  <body>

    <div class="container">

      <?php foreach ($database as $dischi) { ?>
        <div class="card">
        <!-- stampo le copertine -->
        <img src="<?php echo $dischi['poster']; ?>">
        <!-- stampo il titolo dell'album -->
        <h3><?php echo $dischi['title'];  ?></h3>
        <!-- stampo l'autore -->
        <span><?php echo $dischi['author']; ?></span>
        <!-- stampo l'anno di uscita -->
        <span><?php echo $dischi['year']; ?></span>
        </div>
        <!-- fine del ciclo foreach -->
      <?php } ?>
      <!-- fine container -->



    </div>
  </body>
</html>
