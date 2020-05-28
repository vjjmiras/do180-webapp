<html>
  </head>
    <title>Generating a quote</title>
  </head>
  <body>
    <?php
      // v2
      $quotes = array(
        "Der frühe Vogel fängt den Wurm.",
        "Pech im Spiel, Glück in der Liebe.",
        "Keine Antwort ist auch eine Antwort.",
        "Der Hunger kommt beim Essen.",
        "Es ist leichter sich zu entschuldigen als vorher um Erlaubnis zu fragen.",
        "Fliegen und Freunde kommen im Sommer."
      );
      // end of v2
      echo $quotes[rand(0,count($quotes)-1)] . "<br/>\n";
    ?>
  </body>
</html>
