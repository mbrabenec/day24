<?php



// $array = ["1st", "last"];
// $array2 = ["oops"];

// function add_item (&$array, $item) 
// {
//     $array[] = $item;
//     var_dump($array);
// }

// add_item($array, 3);
// add_item($array, "bob");
// add_item($array2, "hey8");






// function element ($elem, $inner = '', $att = '') 
// {
//     return "<{$elem} {$att}>{$inner}</{$elem}>";
// }

// echo element("h1", "colour me blue","style=color:blue");








function convert_weight($value, $unit)
{
    if ($unit === 'lb') {
        return $value / 2.2;
    } elseif ($unit === 'kg') {
        return $value * 2.2;
    }  
}

echo convert_weight(10, 'kg');



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>









</body>

</html>