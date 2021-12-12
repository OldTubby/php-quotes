<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/slate/bootstrap.min.css" integrity="sha384-8iuq0iaMHpnH2vSyvZMSIqQuUnQA7QM+f6srIdlgBrTSEyd//AWNMyEaSF2yPzNQ" crossorigin="anonymous">
  <title>Random Quotes</title>
</head>
<body>

<h1>Random Quote Generator</h1>
<hr>
<div>
  <?php

    require_once './src/RandomQuotes.php';

    $rq = new \RandomQuotes\RandomQuotes();

    echo '<pre>'; print_r( $rq->generate() ); echo '</pre>';

    echo"\n";
  ?>
</div>
</body>
</html>