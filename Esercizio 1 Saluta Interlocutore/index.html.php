<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio PHP 1</title>
  </head>
  <body>
    <!-- - passare come argomenti in GET nome e cognome; e salutare l'interlocutore -->
    <?php
      $nome=$_GET["nome"];
      $cognome=$_GET["cognome"];
     ?>

    <h1>Ciao
      <?php
      echo $nome.' '.$cognome;
      ?>
    </h1>
  </body>
</html>
