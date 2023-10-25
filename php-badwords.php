<?php

var_dump($_GET);

$_GET['paragrafo'];

echo $paragrafo = $_GET['paragrafo'];

echo $censura = $_GET['censura'];

echo $stringacensurata = str_replace($censura, '***' , $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CDN bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./style.css">

  <title>php-badwords</title>
</head>
<body>
  
<div class="container my-5">
  <h1>php-badwords</h1>
  <div>
    <p>Stampiamo il paragrafo:<br>"<?php echo trim($paragrafo) ?>" quanti caratteri contiene:<?php echo strlen(trim($paragrafo)) ?></p>
    <p>La parola censurata:<br>"<?php echo $censura ?>"</p>
    <div>
      <p>Stampiamo il paragrafo con la parola censurata -> <?php echo $stringacensurata?><br>
        Stampiamo la lunghezza della parola censurata <?php echo strlen(trim($stringacensurata)) ?>
      </p>
    </div>
  </div>

</div>
  
</body>
</html>