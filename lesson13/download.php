<?php

    $filename = basename($_POST['id']);
    $filepath = 'dataFiles/'.$filename;

        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename=$filename');
        header('Content-Type application/zip');
        header('Content-Transfer-Encoding: binary');
        readfile($filepath);

header('Location: ' . $_SERVER["HTTP_REFERER"] );
exit;
