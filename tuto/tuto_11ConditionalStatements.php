<?php

// conditional statements
// kalau true or false dia 1 or kosong

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
 
// if ( $product ['price'] < 85 && $product ['price'] > 20) {
//    echo $product ['name'] . '<br />';    // akan kuaq product name yg below 85 pastu && tu mcm & la
// }

// if ( $product ['price'] > 80 || $product ['price'] < 40) {
//    echo $product ['name'] . '<br />';   // || tu or
// }

 }
?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>

<div>
    <ul>
        <?php foreach ($products as $product) { ?>
            <?php if ($product['price'] > 85) { ?>
                <li><?php echo $product['name']; ?></li>  //list kan product name yg price dia > 85
            <?php } ?>
        <?php } ?>
    </ul>
</div>

</body>
</html>