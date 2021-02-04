<?php

$title = "Inline PHP practice";

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <h1><?= $title  ?></h1>



    <?php if (count($messages)) : ?>

        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
            <?php foreach ($messages as $message => $text) : ?>

                <li><?= $text ?></li>

            <?php endforeach ?>

        </ul>
    <?php endif ?>




</body>

</html>