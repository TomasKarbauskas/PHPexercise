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


//            function exercise7(): array
//            {
//                /*
//                Sunaikinkitę reikšmę 2 ir grąžinkite masyvą
//                Turėtumėte gauti masyvą: ['zero' => 0, 'one' => 1, 'three' => 3, 'four' => 4]
//                */
//
//                $numbers = ['zero' => 0, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//
//                unset($numbers['two']);
//
//                return $numbers;
//            }
//            var_dump(exercise7());



            function exercise8(): array
            {
                /*
                Sunaikinkitę visas reikšmes, kurios dalijasi 2 ir grąžinkite masyvą
                Turėtumėte gauti masyvą: ['one' => 1, 'three' => 3, 'five' => 5]
                */

                $numbers = ['ninety' => 90, 'one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];

                foreach ($numbers as $x => $value) {
                    if ($value % 2 === 0) {
                        unset($numbers[$x]);
                    } return $numbers;
                }
            };
            var_dump(exercise8());






