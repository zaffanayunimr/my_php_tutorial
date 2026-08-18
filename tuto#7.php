<?php

    // intexed arrays

   $peopleOne = ['ehsan', 'ipin', 'mail']; //[]indicate array lam php
   //echo $peopleOne[1]; //[1] refer to sec name. start 0,1,2,....

   $peopleTwo = array ('upin', 'mei-mei'); //another way utk array
   //echo $peopleTwo[1];

   $ages = [20, 30, 40, 50];
   // echo $ages; // error sbb echo cmni ecpect individual 
   //print_r($ages);

   $ages[1] = 25; //bila print dia akan change age dekat postion 1 to 25
   //print_r($ages);

   $ages[] = 60; // kalau tak letak any number position dlm [] ni akan tambah dekat belakang sekali
   //print_r($ages);

   array_push($ages, 70); // ni if mmg nak tambah 70 tu at the end
   //print_r($ages); //kalau tak print nnt dia jadi blank

   //echo count($ages); //dia count ada berapa array in this case 6.

   $peopleThree = array_merge($peopleOne, $peopleTwo); //so mcm people3 = people1 AND people2
   //print_r($peopleThree);


    // associative arrays (key & value pairs)

    $ninjasOne = ['ehsan'=>'orange', 'ipin'=>'blue', 'mail'=>'green'];
    //echo $ninjasOne['ipin']; //dia akan display ipin(key) punya value(blue)
    //print_r($ninjasOne); //print all yg ada dlam ninjasOne

    $ninjasTwo = array('upin'=>'yellow', 'mei-mei'=>'pink'); //other way ja
    //print_r($ninjasTwo);

    //$ninjasTwo['susanti']= 'purple';  //tambah kat hujung
    $ninjasTwo['mei-mei'] = 'purple';  //tukar mei-mei punya value akan jadi purple
    //print_r($ninjasTwo);

    //echo count($ninjasOne); //kira array dekat ninjasOne. in this case 3

    $ninjasThree = array_merge($ninjasOne, $ninjasTwo); //display ninja3 which is ninja1 AND ninja2
    print_r($ninjasThree);
  

?>

<!DOCTYPE html>
<html>
<head>
    <title>its d tutooo for PHP</title>
</head>
<body>



</body>
</html>