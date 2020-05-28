<html>
  </head>
    <title>Generating a quote</title>
  </head>
  <body>
    <?php
      // v3
      $quotes_file = fopen("quotes.src", "r") or die("Unable to open file!");
      $quotes = array();
      while(!feof($quotes_file)) {
        array_push($quotes,trim(fgets($quotes_file)));
      }
      fclose($quotes_file);
    // end of v3

      echo $quotes[rand(0,count($quotes)-1)] . "<br/>\n";
    ?>
  </body>
</html>
