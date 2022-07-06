<?php

//function exercise1(string $stringToSplit, array $delimiters): array
//{
//    /*
//    Funkcija turi priimti string'ą, kuris bus skaidomas,
//    bei masyvą segmentų, pagal kuriuos bus skaidoma.
//    Kvietimas turi atrodyti taip:
//    exercise1('Hello_how_are-you doing?', [' ', '-', '_'])
//    Funkcijos outputas turėtų atrodyti taip:
//    ['Hello', 'how', 'are', 'you', 'doing?']
//    */
//
//    $outputArray = explode($delimiters[0], str_replace($delimiters, $delimiters[0], $stringToSplit));
//
//    return $outputArray;
//};
//print_r(exercise1('Hello_how_are-you doing?', [' ', '-', '_']));


//function exercise2(array $words): array
//{
//    /*
//    Sukategorizuokite žodžius pagal jų pradžios simbolį.
//    Funkcija kviečiama:
//    exercise2(['hello', 'Hickup', '123', 'computer'])
//    Funkcijos outputas:
//    [
//        'h' => ['hello', 'Hickup'],
//        '1' => ['123'],
//        'c' => ['computer'],
//    ]
//    */
//
//    $outputArray = [];
//
//    foreach ($words as $key => $word) {
//
//        $letterForKey = strtolower(substr($word, 0, 1));
//        $outputArray[$letterForKey][] = $word;
//
//    }
//    return $outputArray;
//}
//print_r(exercise2(['hello', 'Hickup', '123', 'computer']));


//function exercise3(array $words): array
//{
//    /*
//    Išveskite žodžių statistiką.
//    Funkcija kviečiama:
//    exercise2(['hello', 'you'])
//    Funkcijos outputas:
//    [
//        'hello' => [
//            'vowels' => 2,
//            'consonants' => 3,
//            'length' => 5,
//            'starts_with' => h,
//            'ends_with' => o,
//        ],
//        'you' => [
//            'vowels' => 3,
//            'consonants' => 0,
//            'length' => 3,
//            'starts_with' => y,
//            'ends_with' => u,
//        ]
//    ]
//    */
//
//    $outputArray = [];
//
//    foreach ($words as $key => $word) {
//        $wordForKey = $word;
//        $text = strtolower($word);
//        //vowels
//        $a = substr_count($text, 'a');
//        $e = substr_count($text, 'e');
//        $i = substr_count($text, 'i');
//        $o = substr_count($text, 'o');
//        $u = substr_count($text, 'u');
//        $vowels = $a + $e + $i + $o + $u;
//        //consonants
//        $b = substr_count($text, 'b');
//        $c = substr_count($text, 'c');
//        $d = substr_count($text, 'd');
//        $f = substr_count($text, 'f');
//        $g = substr_count($text, 'g');
//        $h = substr_count($text, 'h');
//        $j = substr_count($text, 'j');
//        $k = substr_count($text, 'k');
//        $l = substr_count($text, 'l');
//        $m = substr_count($text, 'm');
//        $n = substr_count($text, 'n');
//        $p = substr_count($text, 'p');
//        $q = substr_count($text, 'q');
//        $r = substr_count($text, 'r');
//        $s = substr_count($text, 's');
//        $t = substr_count($text, 't');
//        $v = substr_count($text, 'v');
//        $w = substr_count($text, 'w');
//        $x = substr_count($text, 'x');
//        $z = substr_count($text, 'z');
//        $y = substr_count($text, 'y');
//        $consonants = $b + $c + $d + $f + $g + $h + $j + $k + $l + $m + $n +
//            $p + $q + $r + $s + $t + $v + $w + $x + $z + $y;
//
//        $length = strlen($word);
//        $startsWith = substr($word, 0, 1);
//        $endsWith = substr($word, -1, 1);
//
//        $outputArray[$wordForKey]['vowels'] = $vowels;
//        $outputArray[$wordForKey]['consonants'] = $consonants;
//        $outputArray[$wordForKey]['length'] = $length;
//        $outputArray[$wordForKey]['starts_with'] = $startsWith;
//        $outputArray[$wordForKey]['ends_with'] = $endsWith;
//
////If a word begins with "y" it's using the y as a consonant sound
////therefore in this code 'y' was considered as a consonant
//
//    }
//    return $outputArray;
//}
//print_r(exercise3(['hello', 'you']));


//function exercise4(): array
//{
//    /*
//    Grąžinkite masyvą, kuris savyje turėtų tik tuos žodžius, kurie arba prasideda, arba baigiasi
//    simboliais a, s, b, o
//    */
//    $emails = [
//        'some@email.com',
//        'someAemail.com',
//        'another@gmail.com',
//        'notAreal.email.io',
//        'real@gmail.com',
//    ];
//
//    $outputArray = [];
//    foreach ($emails as $value) {
//
//        $startsWith = strtolower(substr($value, 0,1));
//        $endsWith = strtolower(substr($value,-1,1));
//
//        if($startsWith === 'a' || $startsWith === 's' || $startsWith === 'b' || $startsWith === 'o' ||
//            $endsWith === 'a' || $endsWith === 's' || $endsWith === 'b' || $endsWith === 'o') {
//            array_push($outputArray, $value);
//        }
//    }
//
//    return $outputArray;
//}
//print_r(exercise4());

