<?php

$inventory = [
    'apple' => [
        'count' => 5,
        'price' => 0.15,
    ],
    'carrot' => [
        'count' => 100,
        'price' => 0.01,
    ],
    'fish' => [
        'count' => 15,
        'price' => 5.5,
    ],
    'beer_bottle' => [
        'count' => 22,
        'price' => 1.3,
    ],
    'cheese' => [
        'count' => 1,
        'price' => 4.5,
    ],
    'wine_bottle' => [
        'count' => 4,
        'price' => 8,
    ],
    'bread' => [
        'count' => 11,
        'price' => 2.1,
    ],
];

//Write a program to print the receipt to a customer for some order.

//Expected input: php -f 1_1_shoping_basket.php 'apple:1 carrot:7 wine_bottle:2'
//Expected output:
//You bought: 1 apple, 7 carrot, 2 wine_bottle
//*****
//apple
//0.15 * 1 = 0.15
//*****
//carrot
//0.01 * 7 = 0.07
//*****
//wine_bottle
//8 * 2 = 16
//*****
//Total: 16.22

$cartArray = explode(' ', implode(' ', $argv));

$newCart = [];
foreach ($cartArray as $key => $value) {
    if(preg_match('/[:]/',$value)){
        $newCart[] = $value;
    }
};

$productArray = [];
foreach ($newCart as $key => $value){
    $value = explode(':', $value);
    $productArray[] = $value;
};

$finalProductArray = [];
foreach ($productArray as $key => $value){
    $finalProductArray[$value[0]] = [$value[1]];
};

foreach ($finalProductArray as $key => $value){
    foreach ($value as $subKey => $subValue){
        $a = array_fill_keys(['purchased'], $subValue);
        $finalProductArray[$key] = $a;
    }
};

foreach ($inventory as $product => $value){
    foreach ($finalProductArray as $item => $purchased){
        if($product === $item) {
            $inventory[$product] = $value + $purchased;
        }
    }
}

$arrayForEcho = [];
foreach ($inventory as $item => $value){
    foreach ($value as $subKey => $number){
        if(key_exists('purchased', $value)){
            $arrayForEcho[$item] = $value;
        }
    }
}

//you bought:

foreach ($arrayForEcho as $item => $value){
    $toEcho[] = $value['purchased'].' '.$item;
}

echo 'You bought: '.implode(', ',$toEcho).PHP_EOL;
echo '*****'.PHP_EOL;

foreach ($arrayForEcho as $item => $value){
    $toEcho[] = $value['purchased'].' '.$item;

    $total = number_format($value['purchased'] * $value['price'],2);
    $purchased = number_format($value['purchased'], 2);
    $price = number_format($value['price'],2);
    echo $item.PHP_EOL.$price.' * '.$purchased.' = '.$total.PHP_EOL.'*****'.PHP_EOL;

    $totalArray[] = $total;
    $sumToPay = array_sum($totalArray);
}
echo 'Total: '.$sumToPay;




