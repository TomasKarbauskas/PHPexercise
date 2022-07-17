<?php

$json = file_get_contents('todo_database.json');
$jsonArray = json_decode($json, true);

$todoName = $_POST['id'];
unset($jsonArray[$todoName]);

file_put_contents('todo_database.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;



