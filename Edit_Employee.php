<?php
    $file = 'respaper.pdf';
    $filename = 'respaper.pdf';
    header('Content-type: application/pdf');
    header('Content-Disposotion: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);
?>