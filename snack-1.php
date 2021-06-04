<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  
  
  <?php

    $data = $_GET;

  ?>

  <h1>
    <?php
      if (strlen($data['name']) < 3) {
        echo 'Errore';
      }else{
        echo 'Benvenuto ' . $data['name'];
      };
    ?>
  </h1>

  <h2>
  <?php
    if (strpos($data['mail'], '@') != false || strpos($data['mail'], '.') != false) {
      echo 'la tua mail é: ' . $data['mail'];
    } else {
      echo 'non hai inserito @';
    }
  ?>
  </h2>

  <h2>
  <?php
    if (!is_numeric($data['age'])) {
      echo 'la tua età é: ' . $data['age'] ;
    } else {
      echo 'non hai inserito un numero';
    }
  ?>
  </h2>
</body>
</html>