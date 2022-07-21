<?php

$deleteFile = $_POST['id'];
unlink($deleteFile);

header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
