<?php
$harga = 10000;

switch ($harga) {
    case 1000:
        echo 'itu murah';
        break;
    case 10000:
        echo 'itu agak mahal';
        break;
    case 100000:
        echo 'itu mahal';
        break;
    default:
        echo 'itu sangat mahal';
}