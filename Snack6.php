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
    
      $db = [
        'teachers' => [
          [
            'name' => 'Michele',
            'lastname' => 'Papagni'
          ],
          [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
          ]
        ],
        'pm' => [
          [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
          ],
          [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
          ]
        ]
      ];
      

    ?>


    <div class="green">
      <?php
        foreach($db['pm'] as $value){
          echo $value['name'] . " ";
          echo $value['lastname'] . "<br>";
        }
      ?>
    </div>

    <div class="red">
      <?php
        foreach($db['teachers'] as $value){
          echo $value['name'] . " ";
          echo $value['lastname'] . "<br>";
        }
      ?>
    </div>
    
    <?php
      var_dump($value)
    ?>

    <style>
      .green{
        background-color: lightgreen;
      }

      .red{
        background-color: red;
      }
    </style>

  </body>
</html>