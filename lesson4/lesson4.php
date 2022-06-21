<?php

//function dividesBy5 (int $numberToDivide): int {
//    return $numberToDivide % 5;
//};
//echo (dividesBy5(15));


//$array = [1, 2, 3, 4, 5];
//function arrayPrinter ($array) {
//    foreach ($array as $showValue) {
//        echo $showValue . "\n";
//    }
//};
//echo (arrayPrinter(['some text', 'another text']));
//echo (arrayPrinter($array));


//function stringEnhancer (string $word, $enhancer = '**') {
//    return $enhancer . $word . $enhancer;
//}
//echo stringEnhancer('Yellow submarine', '##');
//echo stringEnhancer('Yellow submarine');




function stringModifier (string &$x, $modifier) {
    $x = $modifier . $x . $modifier;
    return $x;
}
$x = 'akvile';
stringModifier($x, '##');
echo $x;


//function textReplicator (string $text, ?int $timesToReplicate) {
//    if ($timesToReplicate === null) {
//        return $text;
//    } else {
//        $result = '';
//        for($i = 0; $i < $timesToReplicate; $i++) {
//            $result .= $text;
//        }
//        return $result;
//    }};
//echo textReplicator('Ocean_adventure-', 4);
//echo textReplicator('Ocean_adventure-', null);
//or simple way:
//echo str_repeat('Ocean_adventure-', 4);


//$anonymousFn = function (string $text, ?int $timesToReplicate) {
//    if ($timesToReplicate === null) {
//        return $text;
//    } else {
//        $result = '';
//        for($i = 0; $i < $timesToReplicate; $i++) {
//            $result .= $text;
//        }
//        return $result;
//    }};
//echo $anonymousFn('Ocean_adventure-', 4);
//echo $anonymousFn('Ocean_adventure-', null);


