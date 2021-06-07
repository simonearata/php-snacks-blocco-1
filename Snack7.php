<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>


    <?php
    
      $studenti = [
        [
          'nome' => 'Pio',
          'cognome' => 'Rossi',
          'm_voti' => [7,8,4,5]
        ],
        [
          'nome' => 'ugo',
          'cognome' => 'Bianchi',
          'm_voti' => [10,6,7,4]
        ],
        [
          'nome' => 'Fabio',
          'cognome' => 'Neri',
          'm_voti' => [9,4,6,8]
        ],
      ];
      
    ?>

    <?php foreach($studenti as $studenteClass) {?>
      <h1>
        <?php
          echo $studenteClass['nome'] . " ";
          echo $studenteClass['cognome'] . "<br>";
        ?>
      </h1>
      <h2>
        <?php
          echo "voto" . " " . (array_sum($studenteClass['m_voti']) / count($studenteClass['m_voti'])) . "<Br>";
        ?>
      </h2>
    <?php } ?>


    <?php
      var_dump($studenteClass)
    ?>


  </body>
</html>