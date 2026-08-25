<?php

// functions

function sayHello($name = 'farah', $time = 'morning'){ // kalau kat sini tak letak aisyah dia akan call farah
    echo "good $time $name";
}

//sayHello('aisyah'); // kalau kat sini tak letak aisyah dia akan call farah
sayHello('mel', 'night');

function formatProduct($product){
    // echo "{$product['name']} costs RM{$product['price']} to buy <br>";
    return "{$product['name']} costs RM{$product['price']} to buy <br>";
}

// $formatted = formatProduct(['name' => 'signature', 'price' => 20]) ;  
// echo $formatted;

?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>



</body>
</html>