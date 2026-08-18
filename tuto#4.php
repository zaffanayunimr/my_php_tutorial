<?php

define('NAME', 'Yuyu');

// $name = 'Yuyu';     // strng. start w anything but not special character or number, klau lam quote tu takpa
$age = 20;          // int n number tak duduk dlm quotes

//$name = 'Nuni' //(dia baca yg latest)
// define('NAME', 'Nuni'); kalau double dia error
// NAME = 'Nuni'; mcm ni tak valid


?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>

<h1>You Profile Gurll</h1>

<div><?php echo NAME; ?></div>
<div><?php echo $age; ?></div>


</body>
</html>