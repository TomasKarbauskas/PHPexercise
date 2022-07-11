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

