# Struktur Kontrol 
__Struktur Kontrol atau Control Structure__ merupakan suatu algoritma program yang memiliki suatu kondisi, dimana kondisi tersebut yang akan menentukan pengambilan keputusan atau perintah yang akan dijalankan.
PHP melakukan eksekusi perintah mulai dari baris pertama kemudian ke baris berikutnya, sampai baris yang terakhir. Struktur kontrol digunakan untuk mengatur alur logika program agar sesuai dengan kenyataan. Struktur kontrol akan melibatkan variabel, tipe data, dan operator. Secara mendasar struktur program memiliki kombinasi struktur kontrol sebagai berikut :
* Urutan (Sequence)
* Pemilihan (Selection)
* Pengulangan (Iteration)

# Macam-macam struktur kontrol
**1. IF**

IF merupakan struktur kontrol percabangan yang hanya memiliki satu kondisi. Jika pernyataan benar (sesuai) maka perintah dijalankan, sedangkan jika pernyataan salah (tidak sesuai) maka perintah di abaikan. 
* Sintaks struktur IF :
```pernyataan if
if (kondisi) {
  statement;
} else  {
  statement;
}
```
* Contoh penggunaan pernyataan IF :
```contoh penggunaan pernyataan IF :
<?php
$nilai = 80;
if ($nilai > 75) {
	echo 'Lulus';
} else {
	echo 'Tidak Lulus';
}
?>
```

**2. IF Else**

Kontrol struktur Else merupakan pelengkap dari kontrol struktur IF, digunakan untuk memberikan alternatif jawaban benar atau salah. Pernyataan pada bagian Else akan dijalankan apabila pernyataan pada bagian IF bernilai salah.

* Sintaks IF Else:
```pernyataan if else
If (kondisi) {
    Pernyataan 1;
    Pernyataan 2;
    .....
}else{
    Pernyataan a;
    Pernyataan b;
    .....
}
```

* Contoh Penggunaan : 
```penggunaan if else
<?php
$t=date("H");

if ($t<"20") {
 echo "Have a Good Day!";
} else {
 echo "Have a Good Night!";
}
?>
```

**3. If ElseIf Else**

Nilai hasil suatu ekspresi bisa jadi bukan merupakan dua nilai, benar atau salah, tetapi bisa bnyak nilai.
* Sintag If ElseIf Else
```sitag if ElseIf Else
<?php
If (kondisi){
    Pernyataan1;
    Pernyataan2;
    ....
}elseif(kondisi){
    Pernyataan a;
    Pernyataan b;
    ....
}else{
    Pernyataan x;
    Pernyataan y;
    ....
}
?>
```
* Contoh Penggunaan If ElseIf Else
```penggunaan If ElseIf ELse
<?php
$t=date("H");

if ($t<"10") {
 echo "Have a Good Morning!";
} elseif ($t<"20") {
 echo "Have a Good Day!";
} else {
 echo "Have a God Night!";
}
?>
```

**4. While**

While merupakan struktur perulangan yang berfungsi melakukan tugas berulang selama banyaknya pernyataan bernilai benar (terpenuhi). 
* Sintaks struktur While :
```sintaks while
while (kondisi) {
  statement1;
  statement2;
}
```
* Contoh Penggunaan pernyataan while :
```contoh penggunaan
<?php
$i=1;
while ($i <= 10)
{
  echo "The Number Is $i <br>";
  $i++;
}
?>
```

**5. For**

Merupakan perulangan yang dilakukan dalam baris kode dengan batasan
jumlah tertentu.
* Sintag For : 
```sitag for
<?php
for (start; condition; increament) {
    statements;
}
?>
```
* Penggunaan For : 
```contoh penggunaan for
<?php
for ($x=0; $x<=10; $x++){
    echo "The number is : $x <br>";
}
?>
```
