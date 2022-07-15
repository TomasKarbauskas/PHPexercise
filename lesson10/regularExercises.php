<?php

//function exercise1(): void
//{
//    /*
//    Įrašykite skaičius nuo 0 iki 10 į failą pavadinimu numbers.txt.
//    Kiekvienas skaičius turi būti įrašytas naujoje eilutėje.
//    */
//
//    $n = 0;
//while ($n < 10) {
//    echo $n.PHP_EOL;
//    $n++;
//    file_put_contents('lesson10/numbers.txt', $n.PHP_EOL,FILE_APPEND);
//}
//
//}
//exercise1();


//function exercise2(): void
//{
//    /*
//    Įrašykite visus transporto priemonių pavadinimus į failą vehicles.txt.
//    Kiekvienas pavadinimas turi būti įrašytas naujoje eilutėje.
//    */
//
//    $vehicles = [
//        [
//            'type' => 'passenger car',
//            'name' => 'Honda Civic',
//            'weight' => 1550
//        ],
//        [
//            'type' => 'airplane',
//            'name' => 'Boeing 737',
//            'weight' => 41410
//        ],
//        [
//            'type' => 'airplane',
//            'name' => 'Cessna DC-6',
//            'weight' => 1300
//        ],
//        [
//            'type' => 'truck',
//            'name' => 'Volvo FH16',
//            'weight' => 12500
//        ],
//        [
//            'type' => 'truck',
//            'name' => 'MB Actros',
//            'weight' => 13000
//        ],
//        [
//            'type' => 'passenger car',
//            'name' => 'VW Golf',
//            'weight' => 1450
//        ],
//    ];
//
//
//    foreach ($vehicles as $name){
//
//        file_put_contents('lesson10/vehicles.txt', $name['name'].PHP_EOL, FILE_APPEND );
//
//    }
//
//}
//
//exercise2();
////
//function exercise3(): array
//{
//    /*
//    Perskaitykite visus tr. priemonių pavadinimus iš failo vehicles.txt,
//    sudėkite juos į masyva ir grąžinkite iš funkcijos.
//    [
//        'Honda Civic',
//        'Boeing 737',
//        ...
//    ]
//    */
//
//    $string = file_get_contents('lesson10/vehicles.txt');
//
//    $output = explode(',',$string);
//
//    return $output;
//}
//print_r(exercise3());


//function exercise5(): void
//{
    /*
    Įrašykite visą $vehicles masyvą į failą vehicles_database.json JSON formatu.
    */

//    $vehicles = [
//        [
//            'type' => 'passenger car',
//            'name' => 'Honda Civic',
//            'weight' => 1550
//        ],
//        [
//            'type' => 'airplane',
//            'name' => 'Boeing 737',
//            'weight' => 41410
//        ],
//        [
//            'type' => 'airplane',
//            'name' => 'Cessna DC-6',
//            'weight' => 1300
//        ],
//        [
//            'type' => 'truck',
//            'name' => 'Volvo FH16',
//            'weight' => 12500
//        ],
//        [
//            'type' => 'truck',
//            'name' => 'MB Actros',
//            'weight' => 13000
//        ],
//        [
//            'type' => 'passenger car',
//            'name' => 'VW Golf',
//            'weight' => 1450
//        ],
//    ];
//
//    file_put_contents('lesson10/vehicles_database.json', json_encode($vehicles, JSON_PRETTY_PRINT));
//}
//exercise5();

//
//function exercise6(): array
//{
//    /*
//    Perskaitykite failo vehicles_database.json turinį, paverskite jį į masyvą ir grąžinkite iš funkcijos.
//    */
//
//    $file = file_get_contents('lesson10/vehicles_database.json');
//
//    $retrunArray = json_decode($file, true);
//
//    return $retrunArray;
//}
//print_r(exercise6());


//function exercise7(): void
//{
//    $newVehicle = [[
//        'type' => 'plane',
//        'name' => 'Airbus A320',
//        'weight' => 39500,
//    ]];
//
//    /*
//    Papildykite vehicles_database.json esantį masyvą nauja tr. priemone.
//    Žingsniai:
//    - perskaitykite failo vehicles_database.json turinį
//    - paverskite turinį į masyvą
//    - į masyvą pridėkite naują elementą ($newVehicle)
//    - vėl išsaugokite visą masyvą faile vehicles_database.json
//    */
//
//    $string = file_get_contents('lesson10/vehicles_database.json');
//
//    $array = json_decode($string, true);
//
//    $arrayFinal = array_merge($array, $newVehicle);
//
//    file_put_contents('lesson10/vehicles_database.json', json_encode($arrayFinal, JSON_PRETTY_PRINT));
//
//}
//exercise7();
