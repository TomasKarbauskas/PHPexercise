<?php

$error = $_FILES['input_name']['error'];
if($error !== UPLOAD_ERR_OK) {
    echo 'Error upload filed';
    die;
}

$uploadedFileName = $_FILES['input_name']['name'];
$uploadSize = $_FILES['input_name']['size'];
$array = explode('.', $uploadedFileName);

if ($uploadSize < 2000001){
    if(in_array('png', $array) || in_array('jpg', $array) || in_array('JPG', $array)) {
        $fileSavePath = './dataFiles/'. uniqid() . '_' . $uploadedFileName;
        $temporaryFilePath = $_FILES['input_name']['tmp_name'];
        move_uploaded_file($temporaryFilePath, $fileSavePath);
        echo 'Upload successful';
    } else {
        echo 'Error file format, jpg or png type only!';
    }
} else {
    echo 'File is too large, max size 2MB!';
}







