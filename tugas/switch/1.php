<?php
$usia = 40;
	
switch ($usia) {
    case $usia <= 5:
        echo 'balita';
        break;
    case $usia <= 12:
        echo 'anak-anak';
        break;
    case $usia <= 17:
        echo 'remaja';
        break;
    case $usia <= 25:
        echo 'remaja dewasa';
        break;
    case $usia <= 35;
        echo 'dewasa level 1';
        break;
    case $usia <= 50:
        echo 'dewasa';
        break;
    default:
        echo 'sudah tua';
}