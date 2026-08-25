<?php

// variable scope

//local vars

function myFunc (){
    $price = 10;
    echo $price;
}

// myFunc();
// echo $price;

function myFuncTwo($age){
    echo $age;
}

// myFuncTwo(25);
// echo $age; // dia tak boleh call age kat sini sebab dia local var. so kena pass dia kat function tu

 $name = 'farah';

//  function sayHello(){
//     global $name;   // kalau nak call var kat luar function tu kena declare global. klau tak declare global dia tak boleh call var tu
//     $name = 'mel';
//     echo "hello $name";
//  }

// sayHello();
// echo $name; // dia akan call mel sbb dh declare global kat function tu. klau tak declare global dia akan call farah sbb tu var kat luar function tu

function sayBye($name){
    $name = 'aisyah'; // dis will be called sbb dlm function
    echo "bye $name";
}

sayBye($name); // dia akan call farah sbb tu var kat luar function tu
echo $name;


?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>



</body>
</html>