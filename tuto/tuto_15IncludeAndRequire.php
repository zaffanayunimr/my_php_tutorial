<?php

// include('ninjas.php'); // include tu dia akan call file tu. klau file tu takdak dia akan warning je. tapi kalau require tu dia akan error. so dia takkan call file tu. klau file tu takdak
// require('ninjas.php');  

include('ninjas.php');
require('ninjas.php'); 

echo 'end of php';

?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>

<?php  include ('content.php') ?>
<?php  include ('content.php') ?>
<?php  include ('content.php') ?>


</body>
</html>