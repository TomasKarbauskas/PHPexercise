<?php

echo 'enter event and date'.PHP_EOL;
//simulated readline function
if(!function_exists("readline")) {
    function readline($prompt = null){
        if($prompt){
            echo $prompt;
        }
        $fp = fopen("php://stdin","r");
        $line = rtrim(fgets($fp, 1024));
        return $line;
    }
}

$event = readline('Event name:');
$eventDate = readline('Event date (YYYY-MM-DD):');

$date = new DateTime($eventDate);

$presentDate = new DateTime();

    $dateToCompare = $presentDate->diff($date);
    $output = ($dateToCompare->format('%a'));


    echo 'Event '.' \''.$event.'\''. ' is '. $output. ' days away ';






