<?php


// $users = [
//     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
//     ['name' => 'Luca', 'surname' => 'Gino', 'gender' => 'M'],
//     ['name' => 'Laura', 'surname' => 'Laurenti', 'gender' => 'F'],
//     ['name' => 'Gianni', 'surname' => 'Calenda', 'gender' => 'M'],
//  ];

//  foreach ($users as $user){
//     if($user['gender'] == 'F'){
//         echo 'Buongiorno Sig.ra' . " " . $user['name'] . " " . $user['surname'] . " \n" ;
//     }elseif($user['gender'] == 'M'){
//         echo 'Buongiorno Sig.' . " " . $user['name'] . " " . $user['surname'] . " \n"  ;

//     }else{
//         echo 'Buongiorno' . " " . $user['name'] . " " . $user['surname']. " \n"  ;
        
//     }
// }

// fine primo esercizio



// secondo esercizio

$numbers = [10, 7, 6, 4, 12, 9, 3];
$count = 0;
$sum = 0;

foreach ($numbers as $number){
    if(($number % 2) === 0){
        $sum = $sum + $number;
        $count++;

    }

}
echo $sum / $count; 

// fine secondo esercizio