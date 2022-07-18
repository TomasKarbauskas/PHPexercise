<?php

//1. Parašykite funkciją, kuri pašalintų paskutinį žodį iš stringo
//"A car is standing in a parkinglot." --> "A car is standing in a"

//$string = 'A car is standing in a parkinglot.';
//function remove_last_word(string $string)
//{
//    $stringModified = preg_replace('/\W\w+\s*(\W*)$/','', $string);
//    echo $stringModified;
//}
//remove_last_word($string);




//2. Parašykite funkciją, kuri patikrintų, ar tekstas atitinka lietuviško mobilaus telefono numerio formatą
//"+37062345678" - true
//"+37012345678" - false
//"+3706234567" - false
//"+3706234567a" - false

//$phone1 = '+37062345678';
//$phone2 = '+37012345678';
//$phone3 = '+3706234567';
//$phone4 = '+3706234567a';
//
//function mobile_number_format(string $number): bool
//{
//    $array = [];
//    preg_match('/^\+?[0-9]{3}?6[0-9]{7}$/',$number, $array);
//    if(in_array($number, $array)){
//        return true;
//    } else {
//        return false;
//    }
//
//};
//
//var_dump(mobile_number_format($phone2));



//3. Patobulinkite funkciją (2). Funkcija turėtų galėti patikrinti ir tokius telefono numerius:
//"+370 623 45678"
//"+370-623-45678"
//"+370-623 45678"
//"00370 623 45678"
//Jeigu telefono numeris validus, iš funkcijos turėtų grįžti tvarkingai suformatuotas telefono numeris:
//"+370-623 45678" --> "+37062345678"
//
//$phone1 = '+370 623 45678';
//$phone2 = '+370-623-45678';
//$phone3 = '+370-623 45678';
//$phone4 = '00370 623 45678';
//
//
//function mobile_number_format(string $number)
//{
//    $array = [];
//    $newNumber = str_replace(' ', '', $number);
//    $newNumber2 = str_replace('-','',$newNumber);
//    preg_match('/^\+?[0-9]{3}?6[0-9]{7}|^[0-9]{13}$/',$newNumber2, $array);
//    $output = implode($array);
//    echo $output;
//};
//mobile_number_format($phone4);


//4. Parašykite funkciją, kuri užmaskuotų dalį vartotojo duomenų. Pavardės ir gimimo metų simboliai
//turėtų būti pakeisti i simbolius 'X'.
//"John Smith, 1979 05 15" --> "John XXXXX, XXXX 05 15"

//function hide_data (string $string)  incomplete
//{
//    $array = [];
//    $array = explode(' ', $string);
//    foreach ($array as $string) {
//        if(!is_integer($string) && strlen($string) > 4) {
//            $nX = strlen($string);
//            $output = preg_replace('/^([a-z]{5})$/',$nX , $string);
//        }
//    }
//    var_dump($output);
////
//
//    return 0;
//
//}
//print_r(hide_data("John Smith, 1979 05 15"));



