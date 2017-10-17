# Struktur Kontrol 
Struktur Kontrol atau Control Structure merupakan suatu algoritma program yang memiliki suatu kondisi, dimana kondisi tersebut yang akan menentukan pengambilan keputusan atau perintah yang akan dijalankan.
PHP melakukan eksekusi perintah mulai dari baris pertama kemudian ke baris berikutnya, sampai baris yang terakhir. Struktur kontrol digunakan untuk mengatur alur logika program agar sesuiai dengan kenyataan. Struktur kontrol akan melibatkan variabel, tipe data, dan operator. Secara mendasar struktur program memiliki kombinasi struktur kontrol sebagai berikut :
* Urutan (Sequence)
* Pemilihan (Selection)
* Pengulangan (Iteration)

# Macam-macam struktur kontrol
1. IF

IF merupakan struktur kontrol percabangan yang hanya memiliki satu kondisi. Jika pernyataan benar (sesuai) maka perintah dijalankan, sedangkan jika pernyataan salah (tidak sesuai) maka perintah di abaikan. Berikut sintaks struktur IF :
```pernyataan if
if (kondisi) {
  statement;
@Trisantiana
Commit changes

Update README.md

Add an optional extended description…
  Commit directly to the master branch.
  Create a new branch for this commit and start a pull reque
} else  {
  statement;
}
```
Contoh penggunaan pernyataan IF :
```contoh penggunaan pernyataan IF :
<?php
$nilai = 80;
if ($nilai > 75) {
	echo 'Lulus';
} else {
	echo 'Tidak Lulus';
}

?>```

2. IF Else
Kontrol struktur Else merupakan pelengkap dari kontrol struktur IF, digunakan untuk memberikan alternatif jawaban benar atau salah. Pernyataan pada bagian Else akan dijalankan apabila pernyataan pada bagian IF bernilai salah.

* Sintag : 
```If (kondisi) {
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
```<?php
$t=date("H");

if ($t<"20") {
 echo "Have a Good Day!";
} else {
 echo "Have a Good Night!";
}
?>
```


