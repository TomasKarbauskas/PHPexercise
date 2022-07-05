<?php

//function exercise1()
//{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2022 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 12 15:00:12',
//        ],
//        [
//            'name' => 'Cutting board',
//            'last_purchase' => '2022 Feb 1 03:15:01',
//        ],
//    ];
//
//    /*
//    Grąžinkite iš funkcijos masyvą tik su tais produktais, kurie paskutinį kartą buvo pirkti einamaisiais metais.
//    Ši funkcija turėtų veikti ir bet kuriais ateinančiais metais (2023, 2024 ir t.t.)
//    */
//
//
//    $productsPurchasedPresentYear = [];
//    $currentYear = date('Y');
//
//    foreach ($products as $key => $value) {
//        $dateObject = date_create_from_format('Y M j H:i:s', $value['last_purchase']);
//
//        $dateOfPurchase = $dateObject->format('Y');
//
//        if ($currentYear === $dateOfPurchase) {
//            array_push($productsPurchasedPresentYear, $products[$key]);
//        }
//    }
//    return $productsPurchasedPresentYear;
//}
//print_r(exercise1());
