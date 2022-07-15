<?php

//exercise1 add vehicle to database

//    $string = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($string, true);
//
//    $newVehicle = [[
//            'type' => 'bike',
//            'name' => 'BMX',
//            'weight' => 25
//        ]];
//
//    $arrayFinal = array_merge($array, $newVehicle);
//
//    file_put_contents('lesson10/vehicles_database.json', json_encode($arrayFinal, JSON_PRETTY_PRINT));


//exercise1 print all content of database

//$toPrint = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($toPrint, true);
//
//    foreach ($array as $item){
//
//        print_r($item['name'].PHP_EOL);
//
//    };


//exercise1 print vehicle by weight no ID present

//$toPrint = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($toPrint, true);
//
//    $weight = 1450;
//
//    foreach ($array as $item){
//
//        if ($weight === $item['weight']){
//            print_r($item['name'].PHP_EOL);
//        }
//    };


////exercise1 delete vehicle by weight
//
//$toDelete = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($toDelete, true);
//
//    $weight = 1450;
//
//    $modifiedArray = [];
//
//    foreach ($array as $item){
//
//        if ($weight !== $item['weight']){
//            $modifiedArray[] = $item;
//        }
//    };
//
//file_put_contents('lesson10/vehicles_database.json', json_encode($modifiedArray, JSON_PRETTY_PRINT));



//1.1 Sukurkite priemonės pridėjimo funkcionalumą.
//Žingsniai:
//- paimti is failo duomenis
//- juos decodinti
//- tuomet pridėti savo suvestą tr. priemonę
//- vėl encodinti ir išsaugoti faile
//php -f vehicles.php add
//
//Add new vehicle
//Vehicle name: Audi 80
//Vehicle type: passenger car
//Vehicle weight: 1290
//
//Vehicle saved!

//function addVehicleToDatabase (string $mark, string $type, int $weight): void
//{
//    $database = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($database, true);
//
//    $newVehicle = [[
//            'type' => $type,
//            'name' => $mark,
//            'weight' => $weight
//        ]];
//
//    $arrayFinal = array_merge($array, $newVehicle);
//
//    file_put_contents('lesson10/vehicles_database.json',
//        json_encode($arrayFinal, JSON_PRETTY_PRINT));
//}
//addVehicleToDatabase('BMW X1', 'passenger SUV',2000);


//1.2 Sukurkite visų tr. priemonių išvedimą.
//php -f vehicles.php list
//
//    Vehicle list:
//--------
//id: 1
//type: passenger car
//name: Honda Civic
//weight: 1550
//--------
//id: 2
//type: airplane
//name: Boeing 737
//weight: 41410
//--------
//....

//function printVehicleList(string $database): void
//{
//    $toPrint = file_get_contents($database);
//
//    $array = json_decode($toPrint, true);
//
//    foreach ($array as $key => $value) {
//
//        echo 'id: ' . $key . PHP_EOL;
//        echo 'type: ' . $value['type'] . PHP_EOL;
//        echo 'name: ' . $value['name'] . PHP_EOL;
//        echo 'weight: ' . $value['weight'] . PHP_EOL;
//        echo '---------------' . PHP_EOL;
//    }
//}
//printVehicleList('lesson10/vehicles_database.json');


//1.3 Sukurkite vienos tr. priemonės išvedimą.
//ID - yra masyvo nario raktas
//Pvz: čia ID yra 0
//Array
//(
//    [0] => Array
//    (
//        [type] => passenger car
//[name] => Honda Civic
//[weight] => 1550
//)
//)
//
//php -f vehicles.php show_one
//
//Please enter ID of the vehicle:

//function printVehicleById(int $id): void
//{
//    $toPrint = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($toPrint, true);
//
//    $arrayIds = count($array);
//
//    if($arrayIds - 1 < $id) {
//        echo 'Vehicle '.$id.' does not exist!';
//    } else {
//        foreach ($array as $key => $value) {
//            if($key === $id){
//                echo 'id: ' . $key . PHP_EOL;
//                echo 'type: ' . $value['type'] . PHP_EOL;
//                echo 'name: ' . $value['name'] . PHP_EOL;
//                echo 'weight: ' . $value['weight'] . PHP_EOL;
//                echo '---------------' . PHP_EOL;
//            }
//        }
//    }
//}
//printVehicleById(7);


//1.4 Sukurkite vienos tr. priemonės ištrynimą.
//php -f vehicles.php delete_one
//
//Please enter ID of the vehicle to delete:
//
//#################
//
//Pavyzdys #1:
//php -f vehicles.php delete_one
//
//Please enter ID of the vehicle to delete: 1
//
//Vehicle 1 deleted!
//
//#################
//
//Pavyzdys #2:
//php -f vehicles.php delete_one
//
//Please enter ID of the vehicle to delete: 999
//
//Vehicle 999 does not exist!

//function deleteVehicleById(int $id): void
//{
//    $toPrint = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($toPrint, true);
//
//    $arrayIds = count($array);
//
//    if($arrayIds - 1 < $id) {
//        echo 'Vehicle '.$id.' does not exist!';
//    } else {
//        foreach ($array as $key => $value) {
//            if($key === $id){
//               unset ($array[$key]);
//            }
//        }
//    }
//    file_put_contents('lesson10/vehicles_database.json', json_encode($array, JSON_PRETTY_PRINT));
//}
//deleteVehicleById(10);



