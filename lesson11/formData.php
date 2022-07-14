<?php

//exercise3
//echo 'Hello, '. $_POST['name'].' '.$_POST['surname']. ', how are you today?';


//exercise4
//$todo = $_POST['text'];
//$todo = trim($todo);
//
//if($todo) {
//    if(file_exists('lesson11/todo_database.json')){
//        $json = file_get_contents('lesson11/todo_database.json');
//        $jsonArray = json_decode($json, true);
//    } else {
//        $jsonArray = [];
//    }
//
//    $jsonArray[$todo] = ['finished' => false];
//}
//
//file_put_contents('lesson11/todo_database.json',
//    json_encode($jsonArray, JSON_PRETTY_PRINT));
//
//echo 'Form submitted';


//exercise5,6
$todo = $_POST['text'];
$todo = trim($todo);
$date = new DateTime();
$dateToPrint = $date->format('Y-m-d H:i');
$dueDate = $_POST['date'];
$dueTime = $_POST['time'];

if($todo) {
    if(file_exists('todo_database.json')){
        $json = file_get_contents('todo_database.json');
        $jsonArray = json_decode($json, true);
    } else {
        $jsonArray = [];
    }

    $jsonArray[$todo] = [$dateToPrint, $dueDate, $dueTime];
}

file_put_contents('todo_database.json',
    json_encode($jsonArray, JSON_PRETTY_PRINT));

echo 'Form submitted';

header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;







