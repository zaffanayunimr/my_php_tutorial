<?php

// continue & break

// $price = 20;

// if ($price < 10) {
//    echo 'the condition is met'; // kalau betul kluaq ni
// } elseif ($price < 30) {
//     echo 'elseif condition met';
// } else {
//     echo 'the condition is not met'; // kalau salah kluaq ni
// }

$products = [
['name' => 'stamp', 'price' => 20],
['name' => 'legacy', 'price' => 60],
['name' => 'classic', 'price' => 80],
['name' => 'away', 'price' => 89],
['name' => 'signature', 'price' => 95],
['name' => 'heart club', 'price' => 88]
];

 foreach ($products as $product) {
 
 if ($product['name'] === 'signature'){   
   break; // kalau product name tu signature dia akan break dekat situ. so akan call yg before dia
 }

 if($product['price'] > 50){
    continue; // kalau product price dia > 20 dia akan continue. so akan call yg after dia
 }

 echo $product['name'] . '<br />';

 }
?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>


</body>
</html>