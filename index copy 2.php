<?php

$title = "PHP practice";

// students

$students = [];

$students[] = "Thomas";
$students[] = "Kathy";
$students[] = "Eve";
$students[] = "Bernard";

foreach($students as $key => $student) {
    // echo $student."<br>";
}

// div 7

$divisible_by_seven = [];

for ($i = 0; $i < 100; $i++) {
    if($i % 7 == 0) {
        $divisible_by_seven[] = $i;
    }
}

foreach($divisible_by_seven as $key => $num) {
    // echo $num."<br>";
}




// cast

// $cast_crew = [];

// $cast_crew['cast'][] = 'John David Washington';
// $cast_crew['cast'][] = 'Robert Pattinson';
// $cast_crew['cast'][] = 'Elizabeth Debicki';
// $cast_crew['director'][] = 'Christopher Nolan';

// foreach ($cast_crew as $type => $type_array) {
//     foreach($type_array as $i => $person) {
//         echo $type." : ".$person."<br>";
//     }
// }



// var_dump($cast_crew);


// MD array 2

$people = [
    [
        'name' => 'John David Washington',
        'job' => 'actor'
    ],
    [
        'name' => 'Robert Pattinson',
        'job' => 'actor'
    ],
    [
        'name' => 'Christopher Nolan',
        'job' => 'director'
    ],
    [
        'name' => 'Steven Spielberg',
        'job' => 'director'
    ],
    [
        'name' => 'Michael Caine',
        'job' => 'actor'
    ]
];

$cast_crew = ['actors' => [], 'directors' => []];

foreach ($people as $key => $person) {
    if($person['job'] == 'actor') {
        $cast_crew['actors'][] = $person['name'];
    }
    if($person['job'] == 'director') {
        $cast_crew['directors'][] = $person['name'];
    }
} 

// var_dump($cast_crew);

// merge


// $default_values = [

//     'title' => null,
//     'year' => null,
//     'plot' => null,
//     'duration' => null
// ];


// $movie = [

//     'title' => "Tenet",
//     'year' => 2020,
//     'rating' => 7.5,
//     'duration' => 150
// ];


// $movie = array_merge($default_values, $movie);



// echo isset($movie['plot']);
// echo isset($movie['duration']);


// existing 

$movies = [
    [
        'title' => 'Dunkerk',
        'year' => 2017,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Tenet',
        'year' => 2020,
        'pg' => 13
    ],
    [
        'title' => 'Interstellar',
        'year' => 2014,
        'pg' => 13,
        'favourite' => false
    ],
    [
        'title' => 'Inception',
        'year' => 2010,
        'pg' => 13,
        'favourite' => true
    ],
    [
        'title' => 'The Prestige',
        'year' => 2006,
        'pg' => 13
    ],
    [
        'title' => 'Batman begins',
        'year' => 2005,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight',
        'year' => 2008,
        'pg' => 12,
        'favourite' => true
    ],
    [
        'title' => 'The Dark Knight Rises',
        'year' => 2012,
        'pg' => 12,
        'favourite' => false
    ],
];

$favourite_movies = [];
foreach($movies as $movie) {
    if(!empty($movie['favourite'])) {

        $favourite_movies[] = $movie['title'];
    }
}




var_dump($favourite_movies);