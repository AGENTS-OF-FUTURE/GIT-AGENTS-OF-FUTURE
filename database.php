<?php
    $part1_ip = "127.0.0.1";
    $part2_name = "root";
    $part3_p = "";
    $part4_db = "template";

    $induction = mysqli_connect($part1_ip, $part2_name, $part3_p, $part4_db);

    if ($induction == false) {
        echo "ошибка подключения";
    }

?>
