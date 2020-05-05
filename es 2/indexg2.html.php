<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Esercizio PHP 2</title>
  </head>
  <body>
    <!-- - passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola; KO altrimenti -->
    <?php
      $mail=$_GET["mail"];
     ?>

    <h1>
      <?php
      //controllo in che posizione si trova @ e . nella mail
      $haChioccola = strpos($mail, "@");
      $haPunto = strpos($mail, ".");

      //strpos restituisce la posizione (un int che parte da 0 ) se il carattere esiste, altrimenti è false
      if($haChioccola === false || $haPunto === false)  {
        echo "la mail non è valida: KO";
      } else {
        echo "la mail è valida: OK";
      }

      /*
      //altro metodo:
      //siccome strpos restituisce un valore che parte da 0, se uno dei due caratteri "trovati" ha indice 0
      //li aumento di 1, così che l'if successivo non abbia problemi se @ o . sono i primi caratteri della mail
      if ($haChioccola===0 || $haPunto===0) {
        $haChioccola++;
        $haPunto++;
      }
      // echo $haChioccola." ";
      // echo $haPunto." ";

      if ($haChioccola && $haPunto){
        echo "la mail è valida: OK";
      } else {
        echo "la mail non è valida: KO";
      }
      */

      ?>
    </h1>
  </body>
</html>
