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

//function partial_hide_data (string $string): string
//{
//    $array = explode(' ', $string);
//    foreach ($array as $string) {
//        if (strlen($string) > 4) {
//            $subArray = str_split($string);
//            foreach ($subArray as $letter) {
//                if ($letter !== ',') {
//                    $output = preg_replace('/^([a-zA-Z])$/', 'x', $subArray);
//                    $backToString = implode('', $output);
//                    $array[1] = $backToString;
//                }
//            }
//        } else if (strlen($string) > 3) {
//            $subArray = str_split($string);
//            foreach ($subArray as $integer) {
//                    $output = preg_replace('/^([0-9])$/', 'x', $subArray);
//                    $backToString = implode('', $output);
//                    $array[2] = $backToString;
//            }
//        }
//    };
//
//    $output = implode(' ',$array);
//
//    return $output;
//
//}
//print_r(partial_hide_data("John Smith, 1979 05 15"));


//5. Parašykite funkciją, kuri pravaliduotų IPv4 adresą. IPv4 adresas yra sudarytas iš 4 skaičių, kurių kiekvienas gali
//būti nuo 0 iki 255. Skaičiai atskirti taškais.
//    Pvz.:
//255.255.255.255
//1.1.0.1

function validate_IPv4 (string $ipv4): bool
{
    $array = [];
    preg_match(
        '/\b(([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]?)(\.|$)){4}\b/',
        $ipv4, $array);
    if(in_array($ipv4, $array)){
        return true;
    } else {
        return false;
    }
}
var_dump(validate_IPv4('1.1.0.1'));


