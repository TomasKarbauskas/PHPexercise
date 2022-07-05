<?php

/*
1. Išspausdinkite šio momento datą pasinaudodami funkcija 'date'
*/
//function exercise1(): void
//{
//      print_r(new DateTime());
//
//}
//exercise1();
/*
2. Išspausdinkite datą '2008-12-15 15:15' pasinaudodami funkcija 'date'
*/

//function exercise2(): void
//{
//$date = date('Y-m-d H:i');
//print_r($date);
//}
//exercise2();
//function exercise3(): void
//{
//$date1 = date('Y.F.j H:i:s');
//print_r($date1);
//
//$date2 = date('Y.F.d H:i');
//print_r($date2);
//
//$date3 = date('Y.F.jS H:ia' );
//print_r($date3);
//
//$date4 = date('Y/m/j');
//print_r($date4);
//
//$date5 = date('W');
//print_r($date5);
//
//$date6 = date('z');
//print_r($date6);
//}
//exercise3();
/*
3. Išspausdinkite šio momento datą skirtingais formatais, kurie atitiktų pavyzdžius:
- 1970 Mar 1 15:15:00
- 1970 Mar 01 15:15
- 1970 Mar 1st 11:15:00 PM
- 1970/3/1
- savaites numeris (52 savaitės metuose)
- dienos numeris (365 dienos metuose)
*/


//function exercise4(): void
//{
//    $dateTime = '2000-03-02 15:30:00';
//    $date1 = date_create_from_format('Y-m-d H:i:s',$dateTime);
//    print_r($date1);
//
//    $dateTime2 = '2000/02/15 08:30:00 PM';
//    $date2 = date_create_from_format('Y/m/d H:i:s A',$dateTime2);
//    print_r($date2);
////
//    $dateTime3 = '2000 March 2nd 15:30:00';
//    $date3 = date_create_from_format('Y F jS H:i:s', $dateTime3);
//    print_r($date3);
//
//}
//exercise4();

/*
4. Sukurkite datos objektą iš šių tekstinių datų:
- 2000-03-02 15:30:00
- 2000/02/15 08:30:00 PM
- 2000 March 2nd 15:30:00
*/

//5. Sukurkite datą iš '15th Jan 2021 8:15:01 PM' (data X). Pamodifikuokite, kad gautumėte:
//- datą po 2 savaičių nuo datos X
//- datą po 10 metų nuo datos X
//- datą prieš 5 valandas nuo datos X
//- paskutinę mėnesio dieną
//- pirmą mėnesio dieną
//- ateinantį antradienį
//- datą prieš 1 dieną 8 valandas 15 minučių nuo datos X
//*/

//function exercise5(): void
//{
//
//    $dateTime = '15th Jan 2021 8:15:01 PM';
//    $date = date_create_from_format('jS F Y H:i:s A',$dateTime);
//    print_r($date);
//    $addTwoWeeks = $date->modify('+2weeks');
//    print_r($addTwoWeeks);
//    $addTenYears = $date->modify('+10years');
//    print_r($addTenYears);
//    $subFiveHours = $date->modify('-5hours');
//    print_r($subFiveHours);
//    $lastDayOfTheMonth = $date->modify('last day of this month')->format('jS');
//    print_r($lastDayOfTheMonth);
//    $firstDayOfTheMonth = $date->modify('first day of this month')->format('jS');
//    print_r($firstDayOfTheMonth);
//    $nextTuesday = $date->modify('next tuesday')->format('Y m jS');
//    print_r($nextTuesday);
//    $lastModification = $date->modify('-1day -8hours -15minutes')->format('Y m jS H:i');
//    print_r($lastModification);
//
//}
//exercise5();


//function exercise6(): void
//{
//    $products = [
//        [
//            'name' => 'Wine glass',
//            'last_purchase' => '2021 Jan 15 18:34:12',
//        ],
//        [
//            'name' => 'Bread knife',
//            'last_purchase' => '2020 Mar 15 23:14:00',
//        ],
//        [
//            'name' => 'Blue chair',
//            'last_purchase' => '2019 Dec 02 15:00:12',
//        ],
//    ];
//
//
//    foreach ($products as $value){
//        print_r($value['name']. DateTime::createFromFormat('Y F j H:i:s', $value['last_purchase'])->format('Y-m-d H:i:s').PHP_EOL);
//    }
//
//
//    /*
//    Išspausdinkite produktų paskutinių pirkimų santrauką:
//    Wine glass 2021-01-15 18:34:12
//    ...
//    */
//
//}
//exercise6();



//function exercise7($date1, $date2): string
//{
//    /*
//    Palyginkite datas ir grąžinkite atsakymą, kuri data naujesnė.
//    Funkcijos kvietimas: exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
//    Rezultatas:
//    'First date is newer'
//    Funkcijos kvietimas: exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));
//    Rezultatas:
//    'Second date is newer'
//    */
//
//    if ($date1 > $date2) {
//        echo 'First date is newer';
//    } else {
//       echo 'Second date is newer';
//    }
//
//    return '';
//}
//exercise7(date_create('2022-01-25 17:13:25'), date_create('2020-01-25 17:13:25'));
//exercise7(date_create('2020-01-25 17:13:25'), date_create('2022-01-25 17:13:25'));


//function exercise8($date): void
//{
//    /*
//    Išspausdinkite paduotos datos skirtumą nuo dabartinio momento žodžiais.
//    Funkcijos kvietimas: exercise8(date_create('2020-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date was 773 days ago
//    Funkcijos kvietimas: exercise8(date_create('2023-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date is in the future
//    */
//    $presentDate = new DateTime();
//        if ($presentDate > $date) {
//        $dayFormat = 'Supplied date was %a days ago';
//    } else {
//            $dayFormat = 'Supplied date is in the future';
//    }
//
//    $presentDate = new DateTime();
//    $dateToCompare = $presentDate->diff($date);
//    print_r($dateToCompare->format($dayFormat));
//
//    var_dump($presentDate);
//}
//exercise8(date_create('2020-01-25 17:13:25'));
//exercise8(date_create('2023-01-25 17:13:25'));


//function exercise9($date): void
//{
//    /*
//    Išspausdinkite datų skirtumą žodžiais.
//    Funkcijos kvietimas: exercise9(date_create('2020-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date was 2 years 1 months 11 days
//    Funkcijos kvietimas: exercise9(date_create('2023-01-25 17:13:25'));
//    Rezultatas:
//    Supplied date is in the future
//    */
//
//    $presentDate = new DateTime();
//        if ($presentDate > $date) {
//        $dayFormat = 'Supplied date was %y years %m months %d days';
//    } else {
//            $dayFormat = 'Supplied date is in the future';
//    }
//
//
//    $presentDate = new DateTime();
//    $dateToCompare = $presentDate->diff($date);
//    print_r($dateToCompare->format($dayFormat));
//
//    var_dump($dayFormat);
//}
//exercise9(date_create('2020-01-25 17:13:25'));
//exercise9(date_create('2023-01-25 17:13:25'));

