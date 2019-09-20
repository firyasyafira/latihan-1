<?php

//Hello //Ini komentar

//echo "Hello World <br>"; //echo berfungsi untuk menampilkan tulisan

//print_r("Hello World <br>");//print_r sama kaya echo tp bedanya klo echo bisa tulis langsung sedangkan print_r butuh kurung dulu.

//var_dump("Hai"); //fungsi sama kaya echo dan print_r cuma bedanya nanti pas ditampilin ada jumlah stringnya.

//$nama = "SI"; //variable

//echo "Halo. Nama Saya $nama";

// $nama_depan = "Sistem";
// $nama_belakang = "Informasi";

// // +, -, /, *

// //echo $x - $y;
// echo $nama_depan . " " . $nama_belakang;//gabungan variable 1 & 2

//Operator Assignment
//=. +=

//$x = 1;
//$x += 5; //artinya x=1, lalu x nya ditambah 5, jadinya 1+

//$echo $x;
//<br> = Enter di html
//echo "<br>" = Enter di php
// $y = "Sistem";
// $y .= " ";
// $y .= "Informasi";

// $y.= $x;
// echo $y;

//Operator Perbandingan
// <, >, <=, =>, ==

// var_dump(1 < 5);//nilai true
// var_dump(1 > 5);//nilai false

//var_dump(1 == "1");//jika sama dengannya 3 pasti false karena beda tipe datanya

//Logika
// &&, ||, !
// $x =30;
// var_dump($x < 20 || $x /2 == 0);

$a = 10;
$t = 30;

echo "Rumus Luas Segitiga adalah a x t/2";
echo "<br>";
echo "Alas = ". $a;
echo "<br>";
echo "Tinggi = ". $t;
echo "<br>";
echo "Luas Segitiga :". $a*$t/2;

echo "<br>";
echo "<br>";
$phi = 22/7;
$d = 14;
$r = 7;

echo "Rumus Luas Lingkaran adalah phi x r x r";
echo "<br>";
echo "phi = ". $phi;
echo "<br>";
echo "Diameter = ". $d;
echo "<br>";
echo "Jari-jari = ". $r;
echo "<br>";
echo "Luas Lingkaran :". $phi*$r*$r;

echo "<br>";
echo "<br>";
$x = 15;
$y = 45;

echo "Rumus Luas Jajar genjang adalah a x t";
echo "<br>";
echo "Alas = ". $x;
echo "<br>";
echo "Tinggi = ". $y;
echo "<br>";
echo "Luas Jajar genjang : ". $x*$y;


?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
<h1>Selamat Datang <?php echo $nama; ?></h1>
<h1>Selamat Datang <?= $nama; ?></h1>
ctrl+/ berfungsi untuk mengkeep tulisan
</body>
</html> -->
	


