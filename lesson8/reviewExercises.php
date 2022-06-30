<?php

$numbers = [1, 15, 25, 13, 45, 551, 2];
function exercise1(): int
{
    /*
    Grąžinkite masyvo narių sumą, pakeltą kvadratu
    */
    $numbers = [1, 15, 25, 13, 45, 551, 2];
    $numbersMod = array_sum($numbers) ** 2;


    return $numbersMod;
}
var_dump(exercise1());

function exercise2(): array
{
    /*
    Kiekvieną masyvo narį padauginkite iš 15
    Funkcijos outputas:
    [15, 225, 375, ...]
    */
    $numbers = [1, 15, 25, 13, 45, 551, 2];
    foreach ($numbers as &$value) {
        $value = $value * 15;
    }
    return $numbers;

}
print_r(exercise2());

function exercise3(string $orderDirection): array
{
    /*
    Išmeskite iš masyvo neigiamus skaičius ir juos išrikiuokite didėjimo arba mažėjimo tvarka
    priklausomai nuo $orderDirection reikšmės (ascending arba descending)
    Funkcijos kvietimas: exercise3('descending')
    Funkcijos outputas:
    [15, 3, 1, 0]
    Funkcijos kvietimas: exercise3('ascending')
    Funkcijos outputas:
    [0, 1, 3, 15]
    */

    $numbers = [1, 15, 25, 13, 45, 551, 2, -3, -4];

    $positiveInt = array_filter($numbers, function($value){
        return $value > -1;
    });


    if ($orderDirection === 'descending') {
        rsort($positiveInt);
    } else if ($orderDirection === 'ascending'){
        sort($positiveInt);
    }
    return $positiveInt;
}
var_dump(exercise3('descending'));


function exercise4(int $number): int
{
    /*
    Prie kiekvieno masyvo nario pridėkite skaičių $number ir grąžinkite visų masyvo narių sumą.
    Funkcijos kvietimas: exercise4(9)
    Funkcija grąžina: 715
    */

    $numbers = [1, 15, 25, 13, 45, 551, 2];

    foreach ($numbers as &$value){
        $value = $value + $number;
    };

    $total = array_sum($numbers);

    return $total;
}
print_r(exercise4(9));