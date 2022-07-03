<?php

$numbers = [1, 15, 25, 13, 45, 551, 2, -3, 0];
//function exercise1(): int
//{
//    /*
//    Grąžinkite masyvo narių sumą, pakeltą kvadratu
//    */
//    $numbers = [1, 15, 25, 13, 45, 551, 2];
//    $numbersMod = array_sum($numbers) ** 2;
//
//
//    return $numbersMod;
//}
//var_dump(exercise1());
//
//function exercise2(): array
//{
//    /*
//    Kiekvieną masyvo narį padauginkite iš 15
//    Funkcijos outputas:
//    [15, 225, 375, ...]
//    */
//    $numbers = [1, 15, 25, 13, 45, 551, 2];
//    foreach ($numbers as &$value) {
//        $value = $value * 15;
//    }
//    return $numbers;
//
//}
//print_r(exercise2());
//
//function exercise3(string $orderDirection): array
//{
//    /*
//    Išmeskite iš masyvo neigiamus skaičius ir juos išrikiuokite didėjimo arba mažėjimo tvarka
//    priklausomai nuo $orderDirection reikšmės (ascending arba descending)
//    Funkcijos kvietimas: exercise3('descending')
//    Funkcijos outputas:
//    [15, 3, 1, 0]
//    Funkcijos kvietimas: exercise3('ascending')
//    Funkcijos outputas:
//    [0, 1, 3, 15]
//    */
//
//    $numbers = [1, 15, 25, 13, 45, 551, 2, -3, -4];
//
//    $positiveInt = array_filter($numbers, function($value){
//        return $value > -1;
//    });
//
//
//    if ($orderDirection === 'descending') {
//        rsort($positiveInt);
//    } else if ($orderDirection === 'ascending'){
//        sort($positiveInt);
//    }
//    return $positiveInt;
//}
//var_dump(exercise3('descending'));
//
//
//function exercise4(int $number): int
//{
//    /*
//    Prie kiekvieno masyvo nario pridėkite skaičių $number ir grąžinkite visų masyvo narių sumą.
//    Funkcijos kvietimas: exercise4(9)
//    Funkcija grąžina: 715
//    */
//
//    $numbers = [1, 15, 25, 13, 45, 551, 2];
//
//    foreach ($numbers as &$value){
//        $value = $value + $number;
//    };
//
//    $total = array_sum($numbers);
//
//    return $total;
//}
//print_r(exercise4(9));



//function exercise5(int $number): void
//{
//    /*
//    Išspausdinkite skaičius, kurie prasideda nuo $number ir mažėja arba didėja iki 0, per du skaitmenis.
//    Funkcijos kvietimas: exercise5(5)
//    Funkcija spausdina:
//    5
//    3
//    1
//    0
//    Funkcijos kvietimas: exercise5(-5)
//    Funkcija spausdina:
//    -5
//    -3
//    -1
//    0
//    */
//
//
//    if ($number < 0) {
//        while ($number < 0) {
//            echo $number . PHP_EOL;
//            $number++;
//        }
//    } else {
//        while ($number >= 0) {
//            echo $number . PHP_EOL;
//            $number--;
//        }
//    }
//}
//exercise5(-5);




//function exercise6(array $numbers): array
//{
//    /*
//    Apskaičiuokite skaičių masyvo statistiką.
//    Jeigu tarp paduotų skaičių yra neigiamų skaičių arba 0, juos ignoruokite.
//    Funkcijos kvietimas: exercise6([1, 3, 40])
//    Funkcija grąžina:
//    [
//        'suma' => 44,
//        'sandauga' => 120,
//        'vidurkis' => 14.66,
//        'maksimumas' => 40,
//        'minimumas' => 1,
//        'skirtumas_max_min' => 39
//    ]
//    */
//
//    foreach ($numbers as $key => $value) {
//        if ($value < 1) {
//            unset($numbers[$key]);
//        };
//    }
//
//        $sum = array_sum($numbers);
//        $product = array_product($numbers);
//        $average = array_sum($numbers) / count($numbers);
//        $highestValue = max($numbers);
//        $lowestValue = min($numbers);
//        $differenceLowestHighest = $highestValue - $lowestValue;
//
//
//        $numberStatistics = array(
//            'suma' => $sum,
//            'sandauga' => $product,
//            'vidurkis' => $average,
//            'maksimumas' => $highestValue,
//            'minimumas' => $lowestValue,
//            'skirtumas' => $differenceLowestHighest
//        );
//
//
//
//    return $numberStatistics;
//}
//print_r(exercise6($numbers));



//function exercise7($height, $width)
//{
//    /*
//    Parašykite funkciją, kuri išspausdintų nurodytų matmenų bloką.
//    Taip pat, pataisykite funkcijos parametrus ir return tipą.
//    Funkcijos kvietimas: exercise7(3, 4)
//    Funkcija grąžina: funkcija nieko negrąžina, ji tik spausdina:
//    [][][][]
//    [][][][]
//    [][][][]
//    */
//
//        if (is_integer($width) && is_integer($height)) {
//            for ($column = 0; $column < $height; $column++) {
//                for ($row = 0; $row < $width; $row++) {
//                    echo '[]';
//                }
//                echo '' . PHP_EOL;
//            }
//        }
//     return $width;
//};
//exercise7(3, 4);


function exercise8(array $items, int $partsCount = 2): array
{
    /*
    Išskaidykite masyvą į nurodytą kiekį dalių.
    Patasykite šios funkcijos 'signature' (parametrus) taip, kad būtų galima ją kviesti nepaduodant
    antrojo parametro $partsCount (2 pavyzdys) ir tokiu atveju masyvas būtų dalinamas į dvi dalis.
    Funkcijos kvietimas:
    exercise8(
        [1, 2, 3, 4, 5, 6, 7],
        4
    )
    Funkcija grąžina:
    [
        [1, 2],
        [3, 4],
        [5, 6],
        [7]
    ]
    Funkcijos kvietimas: exercise8([1, 2, 3, 4, 5, 6, 7])
    Funkcija grąžina:
    [
        [1, 2, 3, 4],
        [5, 6, 7],
    ]
    */


    if ($partsCount !== 2) {
// this part responsible for the use of provided and also of anny array given
        if (count($items) % 2 === 0 && $partsCount % 2 !== 0) {
            return array_chunk($items,count($items) / $partsCount + 1);
        } else if ($partsCount % 2 === 0) {
            return array_chunk($items, round(count($items) / $partsCount), PHP_ROUND_HALF_UP);
        } else {
            return array_chunk($items, round(count($items) / $partsCount + 1), PHP_ROUND_HALF_UP);
        }

// this part returns if no $partsCount provided
    } else {
        return array_chunk($items, number_format(count($items) / 2),0);
    }

}

print_r(exercise8([1, 2, 3, 4, 5, 6, 7]));
print_r(exercise8([1, 2, 3, 4, 5, 6, 7],4));