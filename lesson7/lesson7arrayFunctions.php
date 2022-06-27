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


