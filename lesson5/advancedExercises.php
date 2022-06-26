<?php

//function exercise1(): array
//{
//    $products = [
//        'item_1' => 'desk',
//        'item_2' => 'lamp',
//        'item_3' => 'error',
//        'item_4' => 'sofa',
//        'item_5' => 'error',
//    ];
//
//    /*
//   Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
//   Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
//   */
//
//    foreach ($products as $key => $error) {
//        if ($error === 'error') {
//            unset($products[$key]);
//        }
//    }  return $products;
//}
//var_dump(exercise1());


//function exercise2(int $keyPart): array
//{
//    $products = [
//        'product_1' => 'desk',
//        'product_2' => 'lamp',
//        'product_3' => 'sofa',
//    ];
//
//    /*
//    Sunaikinkitę reikšmę, kuri atitiktų raktą 'product_' + $keyPart ir grąžinkite pamodifikuotą masyvą.
//    Jeigu tokio rakto nėra, gražinkite null. Pridėkite trūkstamą return tipą.
//    Funkcijos kvietimas: exercise2(1)
//    */
//
//    if (!isset($products['product_' . $keyPart])) {
//        var_dump(null);
//            } else {
//        foreach ($products as $key => $value) {
//            if ($key === 'product_' . $keyPart) {
//                unset($products[$key]);
//            }
//        }
//    }return $products;
//}
//var_dump(exercise2(1));


//function exercise3(): array
//{
//    $transactions = [
//        [
//            'total' => 200,
//            'status' => 'error',
//        ],
//        [
//            'total' => 150,
//            'status' => 'completed',
//        ],
//    ];
//
//    /*
//    Sunaikinkitę visus elementus, kurių reikšmė yra 'error' ir grąžinkite pamodifikuotą masyvą.
//    Tikėkitės, kad $products masyvas gali turėti ne 5, 100 elementų - naudokite ciklą.
//    */
//
//    foreach ($transactions as &$subArr){
//        foreach ($subArr as $key => $value) {
//        if ($value === 'error') {
//            unset($subArr[$key]);
//        }
//        }  return $transactions;
//    }
//}
//var_dump(exercise3());


//function exercise4(string $key): string
//{
//    $products = [
//        'product_1' => 'shirt',
//        'product_2' => 'trousers',
//        'product_98' => 'coat',
//    ];
//    /*
//    Funkcija turi grąžinti reikšmę pagal paduota raktą.
//    Jeigu paduotas raktas neegzistuoja $products masyve, gražinkite tekstą 'Item not found'.
//    Funkcijos kvietimas: exercise4('product_2')
//    */
//
//    if (!isset($products[$key])) {
//        echo 'Item not found';
//            } else {
//                var_dump($products[$key]);
//            }
//    return '';
//}
//exercise4('product_2');


function exercise5(): array
{
    $transactions = [
        [
            'count' => 2,
            'price' => 13,
        ],
        [
            'count' => 15,
            'price' => 14,
        ],
    ];
    /*
    Kiekvienai iš transakcijų, esančių kintamajame $transactions, suskaičiuokite galutinę sumą ir pridėkite į
    transakciją su raktu 'total'. Grąžinkite $transactions iš funkcijos.
    Tikėkitės, kad transakciju skaičius gali išaugti. Jų gali būti ne 2, o 100. Dėl to naudokite ciklą.
    Laukiamas rezultatas:
    [
        [
            'count' => 2,
            'price' => 13,
            'total' => 26,
        ],
        ...
    ];
    */



    foreach ($transactions as $transaction) {
        $total = $transaction['count'] * $transaction['price'];
        $transaction['total'] = $total;
    }
    return $transaction;
}

var_dump(exercise5());



