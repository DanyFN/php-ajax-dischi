<!-- richiamo il databse -->
<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="dist/app.css">

  </head>
  <body>
    <!-- header logo -->
    <header>
      <div class="logo">
        <!-- immagine -->
        <img src="img/logo.png" alt="logo" />

      </div>
    </header>

    <div id="clone_template" class="container">





    </div>


    <!-- handlebars -->

    <script id="album-template" type="text/x-handlebars-template">

      <div class="card">
        <img src="{{poster}}" alt="">
        <h3>{{title}}</h3>
        <span class="author">{{author}}</span>
        <span class="year">{{year}}</span>
      </div>

    </script>




  <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
