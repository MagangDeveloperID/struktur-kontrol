<?php
    $d = date("H");
    if ($d < "12") {
        echo "Selamat Pagi";
    } elseif ($d < "20") {
        echo "Selamat Siang";
    } else {
        echo "Selamat Malam";
    }