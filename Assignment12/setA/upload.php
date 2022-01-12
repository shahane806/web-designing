<?php
    $name = file_exists("1.html");
    $size = filesize("1.html");
    $type = filetype("1.html");
    echo("File : $name\n");
    echo("Size : $size\n");
    echo("Type : $type\n");
?>