<?php

$someProducts = [
    '000_product_1  ',
    ' 000_product_2',
    '000_product_3  ',
    '000_product_4',
    '  000_product_5 ',
    '000_product_20
    ',
];


//function exercise1(): array
//{
//    /*
//    Išskaidykite $longLine kintamajį į atskirus žodžius. Žodžiai turi grįžti iš funkcijos masyvo formoje.
//    Skaidykite per underscore (_)
//    */
//    $longLine = 'Hello_how_are_you_doing?';
//    $modiffiedLongLine = explode('_', $longLine);
//
//    return $modiffiedLongLine;
//}
//print_r(exercise1());


//function exercise2(): array
//{
//    /*
//    Grąžinkite masyvą, kuris talpintų tik tuos žodžius, kurie panašūs į emailų adresus
//    t.y. turi savyje simbolį @
//    */
//    $emails = [
//        'some@email.com',
//        'someAemail.com',
//        'another@gmail.com',
//        'notAreal.email.com',
//        'real@gmail.com',
//    ];
//
//    $filteredEmails = [];
//    foreach ($emails as $email => $emailValue) {
//        if (str_contains($emailValue, '@')) {
//            array_push($filteredEmails, $emailValue);
//        }
//    }
//
//    return $filteredEmails;
//}
//print_r(exercise2());


//function exercise3(array $products)
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą.
//    Naudokite $someProducts masyvą
//    */
//
//    $products = implode('',$products);
//    $stringLength = strlen($products);
//    return $stringLength;
//}
//print_r(exercise3($someProducts));


//function exercise4()
//{
//    /*
//    Kiekvienam žodžiui apskaičiuokite balsių skaičių (a, e, i, o, u)
//    Funkcijos kvietimas: exercise4()
//    Funkcija grąžina: [2, 3, 3, 1, 2]
//    */
//
//    $words = [
//        'tennis',
//        'rooftops',
//        'hillside',
//        'warm',
//        'friends',
//    ];
//
//
//    $newArray = [];
//
//    foreach ($words as $key => $value) {
//        $a = substr_count($value,'a');
//        $e = substr_count($value,'e');
//        $i = substr_count($value,'i');
//        $o = substr_count($value,'o');
//        $u = substr_count($value,'u');
//            array_push($newArray, $a + $e + $i + $o + $u);
//
//    } return $newArray;
//
//}
//print_r(exercise4());


//function exercise5(array $products): int
//{
//    /*
//    Suskaičiuokite ir grąžinkite visų $products masyve esančių eilučių ilgių sumą, BET
//    į sumą neįtraukite tuščių simbolių - ty. tarpų, new line ir pan.
//    Naudokite $someProducts masyvą.
//    */
//
//    function trim_val(&$string){
//        $string = trim($string);
//    }
//    array_walk($products, 'trim_val');
//    $products = implode('',$products);
//    $stringLength = strlen($products);
//    return $stringLength;
//
//}
//print_r(exercise5($someProducts));


//function exercise6(): int
//{
//    $text = 'The African philosophy of Ubuntu has its roots in the Nguni word for being human.
//    The concept emphasises the significance of our community and shared humanity and teaches
//    us that "A person is a person through others". Many view the philosphy as a counterweight
//    to the culture of individualism in our contemporary world.';
//
//    /*
//    Suskaičiuokite kiek balsių yra tekste
//    */
//
//    $text = strtolower($text);
//
//    $a = substr_count($text, 'a');
//    $e = substr_count($text, 'e');
//    $i = substr_count($text, 'i');
//    $o = substr_count($text, 'o');
//    $u = substr_count($text, 'u');
//
//    $balses = $a + $e + $i + $o + $u;
//
//    return $balses;
//}
//print_r(exercise6());

