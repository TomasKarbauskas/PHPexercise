<?php

function getCities(): array
{
    return [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        [
            'name' => 'Delhi',
            'population' => 29399141,
        ],
        [
            'name' => 'Shanghai',
            'population' => 26317104,
        ],
        [
            'name' => 'Sao Paulo',
            'population' => 21846507,
        ],
        [
            'name' => 'Mexico City',
            'population' => 21671908,
        ],
        [
            'name' => 'New York',
            'population' => 25000000,
        ],
    ];
}

function exercise1(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami paprastu 'foreach' ir grąžinkite ją iš funkcijos.
    Miestus pasiimkite iškvietę funkciją 'getCities'
    */

    $value = 0;
    $cities = getCities();
    foreach ($cities as $key => $values){
        $value += $cities[$key]['population'];
    }
    return $value;

}
var_dump(exercise1());

function exercise2(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcijomis array_column ir array_sum
    ir grąžinkite ją iš funkcijos
    */
    $cities = getCities();
    $population = array_column($cities, 'population');
    $totalPopulation = array_sum($population);
    return $totalPopulation;
}
var_dump(exercise2());

function exercise3(): int
{
    /*
    Suskaičiuokite bendrą miestų populiaciją pasinaudodami funkcija array_reduce ir grąžinkite ją iš funkcijos
    */
    $cities = getCities();
    $totalPopulation = array_reduce($cities, function (float $v, array $b) {
        $total = $b['population'];
        return $v + $total;
    },
        0);
    return $totalPopulation;
};
var_dump(exercise3());

function exercise4(): int
{
    /*
    Suskaičiuokite populiaciją miestų, kurie yra didesni nei 25,000,000 gyventojų.
    Rinkites sau patogiausią skaičiavimo būdą.
    */

    $cities = getCities();
    $totalPop = 0;
    foreach ($cities as $key => $value){
        if($cities[$key]['population'] > 25000000) {
            $totalPop += $cities[$key]['population'];
        }
    } return $totalPop;
}
var_dump(exercise4());


function exercise5(): array
{
    /*
    Grąžinkite masyvą, kuriame būtų tik tie miestai, kurie yra didesni nei 25,000,000 gyventojų
    Rezultatas turi būti tokios pat struktūros, kaip ir pradinis miestų masyvas:
    [
        [
            'name' => 'Tokyo',
            'population' => 37435191,
        ],
        ...
    ]
    */
    $cities = getCities();
    foreach ($cities as $key => $value) {
        if($cities[$key]['population'] < 25000001){
            unset($cities[$key]);
        }
    }
    return $cities;
}
var_dump(exercise5());


function exercise6(): int
{

    /*
    Suskaičiuokite ir grąžinkite bendrą užsakymo sumą.
    Prekėms, kurių pavadinimai nurodyti masyve $lowPriceItems, taikykite kainą 'priceLow'.
    Kitoms prekėms taikykite kainą 'priceRegular'.
    Bandykite panaudoti array_* funkcijas.
    */

    $lowPriceItems = ['t-shirt', 'shoes'];

    $orderItems = [
        [
            'name' => 't-shirt',
            'priceRegular' => 15,
            'priceLow' => 13,
            'quantity' => 3,
        ],
        [
            'name' => 'coat',
            'priceRegular' => 74,
            'priceLow' => 60,
            'quantity' => 6,
        ],
        [
            'name' => 'shirt',
            'priceRegular' => 25,
            'priceLow' => 20,
            'quantity' => 2,
        ],
        [
            'name' => 'shoes',
            'priceRegular' => 115,
            'priceLow' => 100,
            'quantity' => 1,
        ],
    ];


    foreach ($orderItems as $key => $value) {
        if ($orderItems[$key]['name'] === $lowPriceItems[0] || $orderItems[$key]['name'] === $lowPriceItems[1]) {
            unset ($orderItems[$key]['priceRegular']);
        } else {
            unset ($orderItems[$key]['priceLow']);
        }
    };

    $totalLow = array_reduce($orderItems,
        function (float $a, array $price){
            $productTotal = $price['priceLow'] * $price['quantity'];
            return $a + $productTotal;
        }, 0);

    $totalReg = array_reduce($orderItems,
        function (float $a, array $price){
            $productTotal = $price['priceRegular'] * $price['quantity'];
            return $a + $productTotal;
        }, 0);
    $total = $totalLow + $totalReg;

    return $total;
}
print_r(exercise6());



