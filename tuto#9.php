<?php

//loops

$ninjas = ['aisyah', 'mel', 'farah'];

//for($i = 0; $i < count($ninjas); $i++){
//    echo $ninjas[$i] . '<br />'; // klau tdak br tu
//};

//foreach($ninjas as $ninja){
//  echo $ninja . '<br />';
//}

$products = [
['name' => 'stamp', 'price' => 20],
['name' => 'legacy', 'price' => 60],
['name' => 'classic', 'price' => 80],
['name' => 'away', 'price' => 89],
['name' => 'signature', 'price' => 95],
['name' => 'heart club', 'price' => 88]
];

// foreach($products as $product) {
//     echo $product['name'] . ' - ' . $product['price'];
//     echo '<br />';
// }

// $i = 0;

// while($i < count($products)) {
//     echo $products[$i]['name'];
//     echo '<br />';
//     $i++;
// }

?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>

<h1>Products</h1>
<ul>
    <?php foreach($products as $product) { ?>

     <h3><?php echo $product['name']; ?></h3>
     <p>RM <?php echo $product['price']; ?></p>

    <?php } ?>
</ul>

</body>
</html>