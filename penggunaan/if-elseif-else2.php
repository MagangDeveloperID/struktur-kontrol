<?php
    $modal = 700000;
    if ($modal > 1000000) {
        echo "Modal Besar";
    } elseif ($modal >= 300000) {
        echo "Modal Ringan";
    } else {
        echo "Modal Biasa";
    }