<?php

//$n1 = 987;
//$n2 = 545;
//$n3 = 32;
//$n4 = 94;
//var_dump($n1 + $n2 - $n3 * $n4);
//
//$n5 = 32;
//$n6 = 18;
//
//var_dump($n5**3 + $n6);
//
//$n7 = 120;
//$n8 = 4;
//$n9 = 3;
//var_dump(120 / 4 / 3);
//
//$n10 = 187;
//$n11 = 5;
//
//var_dump($n10 % $n11);
//
//$n9++;
//$n9++;
//$n9++;
//var_dump($n9);
//
//$n12 = 12;
//
//$n12++;
//$n12++;
//$n12++;
//$n12++;
//var_dump($n12);


//$n = 1;
//while ($n < 11) {
//    echo $n;
//    $n++;
//};
//do {
//    echo $n;
//    $n++;
//} while ($n < 11);
//for ($n = 1; $n < 11; $n++) {
//    echo $n;
//};
//$n = [1,2,3,4,5,6,7,8,9,10];
//foreach ($n as $toPrint) {
//    echo $toPrint;
//};

//$n = 15;
//while ($n > 2) {
//    echo $n.PHP_EOL;
//    $n--;
//};

//$n = 1;
//while ($n < 21) {
//    if (($n % 2) !== 0) {
//        echo $n.PHP_EOL;
//    };
//    $n++;
//};

//$n = 1;
//while ($n < 21) {
//    if (($n % 3) === 0) {
//        echo $n.PHP_EOL;
//    };
//    $n++;
//};

//$n = 1;
//while ($n < 21) {
//    if (($n % 3) === 0 || ($n % 5) === 0) {
//        echo $n.PHP_EOL;
//    };
//    $n++;
//};

//$n = 1;
//while ($n < 21) {
//    if (($n % 3) === 0) {
//        echo 'Hey ';
//    } elseif (($n % 5) === 0) {
//        echo 'Ho ';
//    } elseif (($n % 3) === 0 && (($n % 5) === 0)) {
//        echo 'HeyHo ';
//    } else {
//        echo $n.' ';
//    }
//    $n++;
//};

$sum = 0;
for($i = 1; $i < 101; $i++) {
    $sum += $i;
}
echo $sum;









