<?php

$movie_names = [
  'tt0468569' => 'Dark Knight',
  'tt0050083' => '12 angry men',
  'tt0108052' => 'Schindler\'s list',
  'tt0110912' => 'Pulp fiction',
  'tt0167260' => 'Lord of the Rings: Return of the King',
  'tt0111161' => 'The Shawshank redemption',
  'tt0071562' => 'The Godfather II',
  'tt0060196' => 'The good, the bad and the ugly',
  'tt0137523' => 'Fight club',
  'tt0068646' => 'The Godfather',
];

$movie_ratings = [
  'tt0111161' => 9.2,
  'tt0068646' => 9.2,
  'tt0071562' => 9.0,
  'tt0468569' => 8.9,
  'tt0050083' => 8.9,
  'tt0108052' => 8.9,
  'tt0110912' => 8.9,
  'tt0167260' => 8.9,
  'tt0060196' => 8.9,
  'tt0137523' => 8.8
];

$movies = [];

asort($movie_names);

foreach ($movie_names as $key => $name) {
  // echo "{$name} was rated {$movie_ratings[$key]}.<br>"; 
}

asort($movie_ratings);

foreach ($movie_ratings as $key => $rating) {
  // echo "{$movie_names[$key]} was rated {$rating}.<br>"; 
}

foreach ($movie_names as $key => $name) {

  $movies[$key] = ['name' => $name, 'rating' => $movie_names[$key]];
}

// messages


$messages = [
  'error' => [
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ],
  'warning' => [
    'This is your first warning',
    'This is your final warning'
  ],
  'success' => [
    'Finally, something was successful.'
  ]
];

function do_something_risky() {
  // pretend to do the risky stuff
 
  // return new messages
  return [
    'error' => [
      'I knew this would happen!',
      'This always happens.'
    ],
    'warning' => [
      'You should fix this before proceeding'
    ],
    'success' => []
  ];
}
 
// let's try it
$new_messages = do_something_risky();

foreach($new_messages as $type => $themessages) {
  $messages[$type] = array_merge($messages[$type], $new_messages[$type]);
}

var_dump($messages);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <!-- <div class="messages">


    <?php foreach ($messages as $type => $messages) : ?>
      <?php if (count($messages)) : ?>
        <?php foreach ($messages as $k => $message) : ?>
          <div class=<?= $type ?>> <?= $message ?></div>
        <?php endforeach ?>
      <?php endif ?>
    <?php endforeach ?>



  </div> -->



</body>

</html>