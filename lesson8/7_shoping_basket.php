<?php

//1.5 Write a new command that is capable to work with nested warehouse array, named $categories.
//It should be able to find the ordered item within 'items' array of a category.
//It should print all the output, that commands 1.1 - 1.4 are able to print.
//Assume, that categories can be at most two levels deep - like fruits->exotic_fruits
//
$categories = [
    'fruits' => ['type' => 'category',
                'items' => ['apple' => ['count' => 5, 'price' => 0.15,],
                    'pear' => ['count' => 5, 'price' => 0.15,],],
        'categories' => [
            'exotic_fruits' => ['type' => 'category',
                'items' => ['banana' => ['count' => 15, 'price' => 0.3,],],],],],


    'vegetables' => ['type' => 'category',
                     'items' => ['carrot' => ['count' => 100, 'price' => 0.01,],
                    'tomato' => ['count' => 45, 'price' => 0.5,],],],

    'seafood' => ['type' => 'category',
        'items' => ['seabass' => ['count' => 15, 'price' => 5.5,],],],

    'alcohol' => ['type' => 'category',
        'items' => ['beer_bottle' => ['count' => 22, 'price' => 1.3,],
                    'wine_bottle' => ['count' => 4, 'price' => 8,],],
        ],

    'milk' => ['type' => 'category',
        'items' => ['cheese' => ['count' => 1, 'price' => 4.5,],
                    'yoghurt' => ['count' => 13, 'price' => 0.99,],],],

    'bread' => ['type' => 'category',
        'items' => ['brown_bread' => ['count' => 11, 'price' => 2.1,],
                    'white_bread' => ['count' => 110, 'price' => 1.3,],],],
];

//to work with categories array modifications were made

$categoriesModified1 = [];
foreach ($categories as $key => $value){
    foreach ($value as $subKey => $subValue){
        $categoriesModified1[] = $subValue;
    }
}

$categoriesModified2 = [];
$totalCategoryItem = [];
foreach ($categoriesModified1 as $key => $value){
    if (is_array($value)){
        foreach ($value as $subKey => $subValue){
            $categoriesModified2[$subKey] = $subValue;
            foreach ($subValue as $subKey2 => $subValue2){
                if($subKey2 === 'type'){
                    $totalCategoryItem = $value;
                }
            }
        }
    }
}

$forTotalOutputByCategory = array_merge_recursive($totalCategoryItem, $categories);

$forExotics = [];
foreach ($categoriesModified2 as $key => $value){
    foreach ($value as $subKey => $subValue){
        if(is_array($subValue)) {
            $forExotics = $subValue;
            unset ($categoriesModified2[$key]);
        }
    }
}

$categoriesModFinal = array_merge_recursive($forExotics, $categoriesModified2);

$cartArray = explode(' ', implode(' ', $argv));


$totalCalculations = [];
foreach ($cartArray as $key => $value) {
    foreach ($forTotalOutputByCategory as $item => $values){
        if($value === $item) {
            $totalCalculations[$item] = $values;
        }
    }
}

$arrayCount = [];
$arrayCost = [];
if(!empty($totalCalculations) && in_array('total', $cartArray) && in_array('category', $cartArray)){
    foreach ($totalCalculations as $key => $value){
        foreach ($value as $subKey => $subValue){
            if(is_array($subValue)){
                foreach ($subValue as $subKey2 => $subValue2){
                    $arrayCount[] = $subValue2['count'];
                    $cost = $subValue2['price'] * $subValue2['count'];
                    $arrayCost[] = $cost;
                }
            }
        }
    }
    $totalCount = array_sum($arrayCount);
    $totalCost = array_sum($arrayCost);
    echo 'Total count: '.$totalCount.PHP_EOL.'Total cost: '.$totalCost.PHP_EOL;

    exit;
}

if(in_array('get_total', $argv)){
    $totalCount = array_reduce($categoriesModFinal,
        function (float $n, array $count){
            return $n + $count['count'];
        },0);

    $totalCost = array_reduce($categoriesModFinal,
        function (float $n, array $price){
            return $n + $price['count'] * $price['price'];
        },0);
    echo 'Total count: '.$totalCount.PHP_EOL.'Total cost: '.$totalCost.PHP_EOL;
    exit;
}

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

foreach ($categoriesModFinal as $product => $value){
    foreach ($finalProductArray as $item => $purchased){
        if($product === $item) {
            $categoriesModFinal[$product] = $value + $purchased;
        }
    }
}

$arrayForEcho = [];
foreach ($categoriesModFinal as $item => $value){
    foreach ($value as $subKey => $number){
        if(key_exists('purchased', $value)){
            $arrayForEcho[$item] = $value;
        }
    }
}


$overboughtArray = [];
foreach ($arrayForEcho as $key => $val){
    if($val['purchased'] > $val['count']) {
        $overboughtArray[$key] = $val;
    }
}

if(!empty($overboughtArray)){

    echo 'Error!'.PHP_EOL;
    foreach ($overboughtArray as $key => $val){
        echo 'We only have '.$val['count'].' '.$key.', you asked '.$val['purchased'].PHP_EOL;
    }

} else {

    $toEcho = [];

    foreach ($arrayForEcho as $item => $value){
        $toEcho[] = $value['purchased'].' '.$item;
    }

    echo 'You bought: '.implode(', ',$toEcho).PHP_EOL.'*****'.PHP_EOL;

    foreach ($arrayForEcho as $item => $value){

        $total = number_format($value['purchased'] * $value['price'],2);
        $purchased = number_format($value['purchased'], 2);
        $price = number_format($value['price'],2);
        echo $item.PHP_EOL.$price.' * '.$purchased.' = '.$total.PHP_EOL.'*****'.PHP_EOL;

        $totalArray[] = $total;
        $sumToPay = array_sum($totalArray);
    }
    echo 'Total: '.$sumToPay;
}



//1.6 Improve your command to provide analytical data to a store manager
//
//
//Expected input: php -f 7_shoping_basket.php total category bread
//Expected output:
//Total count: 258
//Total cost: 173.45