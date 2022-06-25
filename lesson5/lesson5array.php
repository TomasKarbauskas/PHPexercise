<?php

//function exercise1(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = [0, 1, 2, 3, 4];
//
//    return $numbers[3];
//}
//var_dump( exercise1());


//function exercise2(): int
//{
//    /*
//    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 3 ir grąžinkite tą reikšmę iš funkcijos.
//    */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//
//    return $numbers['three'];
//}
//var_dump(exercise2());


//function exercise3(): int
//{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

//    $numbers = [
//        [0, 1],
//        [1, 0, 2],
//        [0,
//            [0, 1, 99],
//        ],
//    ];
//
//    return $numbers[2][1][2];
//};
//var_dump(exercise3());


//function exercise4(): int
//{
    /*
    Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
    */

//    $numbers = [
//        'first' => [0, 1],
//        'third' => [1, 0, 2],
//        'fourth' => [
//            'value_1' => 0,
//            'value_2' => [
//                'zero' => 0, 'one' => 1, 'ninetynine' => 99
//            ],
//        ],
//    ];
//
//    return $numbers['fourth']['value_2']['ninetynine'];
//}
//var_dump(exercise4());


//    function exercise5(): int
//    {
        /*
        Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
        */

//        $numbers = [
//            'first' => [0, 1],
//            'third' => [1, 0, 2],
//            'fourth' => [
//                'value_1' => 0,
//                'value_6' => [
//                    'zero' => 0, 'one' => 1, 99
//                ],
//            ],
//        ];
//
//        return $numbers['fourth']['value_6'][0];
//    };
//    var_dump(exercise5());


//        function exercise6(): int
//        {
            /*
            Pasinaudodami masyvo operatoriumi paimkite elementą, kurio reikšmė yra 99 ir grąžinkite tą reikšmę iš funkcijos.
            */

//            $numbers = [
//                'first' => [0, 1],
//                'third' => [1, 0, 2],
//                'fourth' => [
//                    'value_1' => 0,
//                    'value_6' => [
//                        5 => 0, 'one' => 1, 99
//                    ],
//                ],
//            ];
//
//            return $numbers['fourth']['value_6'][6];
////            var_dump($numbers);
//        };
//        var_dump(exercise6());


//function exercise7(): array
//{
// /*
//  Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
//  Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
// */
//
//    $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//    unset($numbers['two']);
//    return $numbers;
//}
// var_dump(exercise7());


// function exercise8(): array
//{
//    /*
//      Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
//      Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
//                */
//    $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
//
//    foreach ($numbers as $key => $value) {
//        if ($value % 2 === 0) {
//            unset($numbers[$key]);
//        }
//    } return $numbers;
//};
//var_dump(exercise8());



//function exercise9(int $start, int $end): void
//{
//    /*
//    Išspausdinkite skaičius nuo $start iki $end pasinaudodami ciklu.
//    Jeigu $start yra mažiau nei $end, funkcija nieko nespausdina.
//    */
//    if ($start > $end) {
//        foreach (range($start, $end) as $number) {
//            echo $number . ' ';
//        }
//    } else {
//        echo '';
//    }
//};
//exercise9(10, 5);


//function exercise10(int $number): void
//{
//    /*
//    Išspausdinkite skaičius, kurie yra mažesni nei $number ir dalijasi iš 3. Jeigu paduotas skaičius mažesnis nei 0,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise10(60)
//    Funkcija spausdina:
//    3
//    6
//    9
//    12
//    ...
//    60
//    */
//
//    $n = 1;
//    if ($number < 0) {
//        echo '';
//    } else {
//        while ($number >= $n) {
//            if (($n % 3) === 0) {
//                echo ($n.PHP_EOL);
//            };
//            $n++;
//        };
//    };
//};
//exercise10(60);


//function exercise11(int $number): void
//{
//    /*
//    Išspausdinkite skaičius nuo $number iki 0 pasinaudodami ciklu. Jeigu paduotas skaičius neigiamas,
//    funkcija nieko nespausdina.
//    Funkcijos kvietimas: exercise11(21)
//    Funkcija spausdina:
//    21
//    20
//    19
//    ...
//    1
//    0
//    */
//
//    if ($number < 0) {
//        echo '';
//    } else {
//        while ($number >= 0) {
//            echo ($number.PHP_EOL);
//            $number--;
//        };
//    };
//};
//exercise11(-21);


function getNumbers(): array
{
    return [
        99,
        15,
        28,
        13,
        145,
        99,
        12,
        -57,
        -36,
    ];
}

function exercise12(): int
{
    $numbers = getNumbers();
    return array_sum($numbers);
}
var_dump(exercise12());


function exercise13(): int
{
    $numbers = getNumbers();
    function evenNumbers($numbers) {
        return !($numbers & 1);
    }
    $evenNum = array_filter($numbers, 'evenNumbers');
    $evenNum = array_values(array_filter($evenNum));
    return array_sum($evenNum);
}
var_dump(exercise13());


function exercise14(): int
{
    $numbers = getNumbers();
    function sumOfPositiveNumbers($numbers) {
        return ($numbers > 0);
    }
    $sumOfPositiveNumbers = array_filter($numbers, 'sumOfPositiveNumbers');
    $sumOfPositiveNumbers = array_values(array_filter($sumOfPositiveNumbers));
    return array_sum($sumOfPositiveNumbers);
}
var_dump(exercise14());


function exercise15(): int
{
    $numbers = getNumbers();
    function multOfNumbersDivBy5($numbers) {
        return (($numbers % 5) === 0);
    }
    $multOfNumbersDivBy5 = array_filter($numbers, 'multOfNumbersDivBy5');
    $multOfNumbersDivBy5 = array_values(array_filter($multOfNumbersDivBy5));
    return array_product($multOfNumbersDivBy5);
}
var_dump(exercise15());


function exercise16(): int
{
    $numbers = getNumbers();
    $numbers = array_map('abs', $numbers);
    $average = array_sum($numbers) / count($numbers);
    return $average;
}
var_dump(exercise16());

//exercise17
    $numbers = getNumbers();
    array_push($numbers, 255);
    print_r($numbers);











