<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
<?php

  $posts = [

    '10/01/2019' => [
      [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
      ],
      [
        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 4'
      ],
      [
        'title' => 'Post 5',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 5'
      ],
      [
        'title' => 'Post 6',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 6'
      ]
    ],
  ];

?>

<?php
  foreach($posts as $post){
    foreach($post as $key => $value){
      echo $post;
      echo $value['title'] . "<br>";
      echo $value['author'] . "<br>";
      echo $value['text'] . "<br>";
      echo "<br><br>";
    }
    
    echo "<br><br>";
  }
?>

<?php
  var_dump($value[$key])
?>


</body>
</html>