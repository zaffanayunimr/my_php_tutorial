<?php

    // multi-dimesional arrays

    $blogs = [
        ['title' => 'cupcake aisyah', 'author' => 'aisyah', 'content' => 'arcaiiv', 'likes' => 30],
        ['title' => 'hidup kena chill', 'author' => 'mama', 'content' =>'arcaiiv', 'likes' =>25],
        ['title' => 'keep smiling stay positive', 'author' => 'cupcake', 'content' =>'arcaiiv', 'likes' =>50]
    ];

//print_r($blogs[1]); //print the whole array 1
//print_r($blogs[1][1]); //print yg dekat position 1 dlm array1

//echo $blogs[2]['author']; //displaying author (cupcake) dekat array 2 dlm $blogs
//echo count($blogs); //brapa array dlm blog

$blogs[] = ['title' => 'birthday month', 'author' => 'august', 'content' => 'arcaiiv', 'likes' => 300]; //add as next array
//print_r($blogs); 

$popped = array_pop($blogs);
print_r($popped);  //pick yg latest?? ig...
?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>


</body>
</html>