<?php

$stringOne = "girl, my email is ";
$stringTwo = "yuyuyu@gmail.com";

// echo $stringOne.$stringTwo;  // . tu mcm and la (join 2geder)

$name = 'Nuyi';

//echo 'Hiii, my name is ' . $name; //lepas is tu jarak sebelum tutp' kalau tau dak dia bersambung ngn name

//echo "Helluu my name is $name";  //kalau dh pakai ", dia akan terus tangkap $ dlm dia

//echo "babeee, she scream \"HOIIIII\""; // backslash tu kalau nak guna "" dalam "", so \ tu jadi benteng supaya dia tak close sebelum actual "
//echo 'babeee, she scream "HOIIIII"'; // klau camni tayah guna backslash tkpa

//echo $name [1]; //pickup huruf dekat $name. dia start dgn 0,1,2....

//echo strlen($name); //ada berapa huruf dekat $name tu
//echo strtoupper($name); //all UPPERCASE
//echo strtolower($name); //all lowercase
echo str_replace('y', 'm', $name); //change huruf y dengan huruf m dekat $name

?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>



</body>
</html>