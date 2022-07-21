<?php

function getShoppingCart(): array
{
    return [
        'products' => [
            'Comfy chair' => 'no data',
            'Yellow lamp' => ['price' => 15.3, 'quantity' => 2,],
            'Didzioji sofa' => ['pavadinimas' => 'Didzioji sofa', 'kaina' => 'trylika eurų'],
            'Softest rug' => ['price' => 27.3, 'quantity' => 3, 'discount' => 13,],
            'Blue shelf' => [],
        ],
        'cartDiscounts' => [5, 16, 15],
    ];
};

//function exercise1(): void
//{
//
//    /*
//    Išspausdinti visų krepšelio produktų pavadinimus vienoje eilutėje.
//    Comfy chair, Yellow lamp, Didzioji sofa, Softest rug, Blue shelf
//    */
//    $products = getShoppingCart();
//
//    $productKeys = array_keys($products['products']);
//    $output = implode(', ',$productKeys);
//
//    echo $output;
//}
//exercise1();


//function exercise2()
//{
//    /*
//    Suskaičiuokite pirkimų krepšelio bendrą sumą (price * quantity)
//    Kaip matote, krepšelio duomenys, kuriuos gavome iš svetimos sistemos, yra netvarkingi.
//    - Skaičiuojant reikėtų atsižvelgti tik į produktus, kurie turi laukus 'price' ir 'quantity'.
//    Jeigu produkto laukai užvadinti kitais pavadinimais arba iš viso jų neturi, tą produktą reikia ignoruoti.
//    */
//
//    $products = getShoppingCart();
//    $total = 0;
//
//    $product1 = array_column($products, 'Yellow lamp',);
//    $product2 = array_column($products, 'Softest rug');
//    $arrayTotal = array_merge($product1, $product2);
//
//    $total = array_reduce($arrayTotal,
//        function (float $a, array $price){
//            $productTotal = $price['price'] * $price['quantity'];
//            return $a + $productTotal;
//        }, 0);
//
//    return $total;

//}
//print_r(exercise2());


//function exercise3(): float
//{
//
//    /*
//    Suskaičiuokite pirkinių krepšelio bendrą sumą.
//    Galioja tos pačios salygos kaip ir funkcijoje exercise2, bet papildomai reikia:
//    - Skaičiuojant bendrą sumą pritaikyti nuolaidas.
//    Nuolaida laikoma 'cartDiscounts' masyve, taip pat nuolaida gali būti ir prie produkto - 'discount'.
//    Abi reikšmės yra išreikštos procentais.
//    Nuolaidos sumuojasi.
//    Krepšelio nuolaida taikoma bendrai krepšelio sumai.
//    Naudojama tik viena, didžiausia su krepšeliu susieta nuolaida ('cartDiscounts').
//    */
//
//    $products = getShoppingCart();
//
//    $product1 = array_column($products, 'Yellow lamp',);
//    $product2 = array_column($products, 'Softest rug');
//    $arrayTotal = array_merge($product1, $product2);
//
//
//    $cartDiscounts = array_values($products['cartDiscounts']);
//    $discountForCart = max($cartDiscounts);
//
//
//    $totalBeforeCartDiscount = array_reduce($arrayTotal,
//        function (float $a, array $price){
//
//            $price['price'] = $price['price'] - ($price['price'] / 100 * $price['discount']);
//            $productTotal = $price['price'] * $price['quantity'];
//
//           return $a + $productTotal;
//        }, 0);
//
//    $total = number_format
//    ($totalBeforeCartDiscount - ($totalBeforeCartDiscount / 100 * $discountForCart),2);
//
//    return $total;
//
//}
//print_r(exercise3());


//function exercise4(array $newIpList): array
//{
//    $existingIpList = [
//        '1.17.2.1',
//        '15.1.2.1',
//        '1.9.2.1',
//        '1.1.98.1',
//        '1.1.2.12',
//        '1.11.2.1',
//        '122.1.2.1',
//        '1.31.2.1',
//        '33.12.2.1',
//    ];
//
//    /*
//    Sukategorizuokite ip adresų sąrašą.
//    ipsNew - ip iš $newIpList, kurių nėra $existingIpList
//    ipsOld - ip iš $existingIpList, kurių nėra $newIpList
//    ipsRemaining - ip, kurie egzistuoja abiejuose sąrašuose
//    funkcija butu kviečiam taip:
//    exercise4(
//        ['15.1.2.1', '16.1.8.1', '15.1.8.1']
//    );
//    */
//
//    $result = [];
//    $result['ipsNew'] = array_diff($newIpList, $existingIpList);
//    $result['ipsOld'] = array_diff($existingIpList, $newIpList);
//    $result['ipsRemaining'] = array_intersect($newIpList, $existingIpList);
//
//    return $result;
//}
//print_r(exercise4(['15.1.2.1', '16.1.8.1', '15.1.8.1']));


//function exercise5(): string
//{
//    $words = [
//        'over',
//        'jumps',
//        'fox',
//        'Quick',
//        'dog',
//        'lazy',
//        'very',
//        'the',
//    ];
//
//    /*
//    "Išverskite" masyvą į kitą pusę ir paverskite į string tipo reikšmę.
//    Arčiausiai vidurio esantys masyvo elementai turėtų atsirasti šonuose.
//    Masyvo elementų skaičius galėtų dideti, bet jis visada bus lyginis.
//    Rezultatas turėtų būti - 'Quick fox jumps over the very lazy dog'
//    */
//
//
//    $words = array_reverse($words);
//    $chunkLength = count($words) / 2;
//    $newArray = array_chunk($words, $chunkLength);
//    $newArrayReverse = array_reverse($newArray);
//    $arrayToString = implode(' ', $newArrayReverse[0]).' '.implode(' ', $newArrayReverse[1]);
//    return $arrayToString;
//}
//print_r(exercise5());


/*
    exercise 6
    Parašykite savo array_map funkcijos versiją nesinaudodami pačia array_map funkcija
*/

//$stringToUpper = function (string $value): string
//{
//    return strtoupper($value);
//};
//$people = ['anna','john','vida'];
//
//function array_map_custom(callable $callback, array $array): array
//{
//    $outputArray = [];
//    foreach ($array as $value){
//        $outputArray[] = $callback($value);
//    }
//    return $outputArray;
//}
//print_r(array_map_custom($stringToUpper, $people));



/*
    exercise 7
    Parašykite savo array_filter funkcijos versiją nesinaudodami pačia array_filter funkcija
*/

//$numbers = [1,2,3,4,5,6,7,8,9,-11,-12];
//$removeNegatives = function (int $value)
//{
//    if($value < 0){
//        unset ($value);
//    } return $value;
//};
//
//function array_filter_custom(array $array, ?callable $callback): array
//{
//    $outputArray = [];
//    foreach ($array as $value){
//        $outputArray[] = $callback($value);
//    }
//    foreach ($outputArray as $key => $value){
//        if($value === null){
//            unset($outputArray[$key]);
//        }
//    }
//    return $outputArray;
//}
//print_r(array_filter_custom($numbers, $removeNegatives));


/*
    exercise 8
    Parašykite savo array_reduce funkcijos versiją nesinaudodami pačia array_reduce funkcija
*/

//$people = ['anna','john','vida'];
//$arrayToString = function (array $array): string
//{
//    return implode(',',$array);
//};
//
//function array_reduce_custom(array $array, callable $callback, $carry = ''): mixed
//{
//    return $callback($array);
//}
//print_r(array_reduce_custom($people, $arrayToString));
