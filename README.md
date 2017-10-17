# Struktur Kontrol 
Struktur Kontrol atau Control Structure merupakan suatu algoritma program yang memiliki suatu kondisi, dimana kondisi tersebut yang akan menentukan pengambilan keputusan atau perintah yang akan dijalankan.

# Macam-macam struktur kontrol
1. IF
IF merupakan struktur kontrol percabangan yang hanya memiliki satu kondisi. Jika pernyataan benar (sesuai) maka perintah dijalankan, sedangkan jika pernyataan salah (tidak sesuai) maka perintah di abaikan. Berikut sintaks struktur IF :
if (kondisi) {
  statement;
} else  {
  statement;
}

contoh penggunaan pernyataan IF :
<?php
$nilai = 80;
if ($nilai > 75) {
	echo 'Lulus';
} else {
	echo 'Tidak Lulus';
}
