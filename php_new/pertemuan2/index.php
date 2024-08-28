<?php
// ini komentar tunggal 
/* 
ini momentar jamak
bisa buat banyak baris
*/
/*----------------------*/ 

// Sintaks PHP

/*----------------------*/ 
//Standar Output
//echo, print
//print_r->debuging
//var_dump->debuging
// contoh :
echo "Evi Listianingsih <br>";
print "Evi Listianingsih <br>";
print_r("Evi Listianingsih <br>");
var_dump("Evi Listianingsih <br>");

/*----------------------*/ 
//Penulisan sintaks PHP
//1. PHP di dalam HTML
//2. HTML di dalam PHP -> tidak direkomendasikan
/*----------------------*/ 

/*----------------------*/ 
//Variabel dan Tipe Data
/*----------------------*/ 
//Variabel : tidak boleh diawali dengan angka tapi boleh mengandung angka. interpolasi ""
/*----------------------*/ 
// contoh :
$nama = "Evi Listianingsih <br>";
/*----------------------*/ 
//Operator
//aritmatika
// + - * / %
//contoh :
$x = 10; //->bisa dibuat variabel bisa langsung
$y = 20;
echo $x+$y, "<br>";

//pengabung string/concatenation/concet pake titik .
// contoh

$nama_depan = "Evi";
$nama_belakang = "Listianingsih";
echo $nama_depan . " " . $nama_belakang, "<br>";

/*----------------------*/
//Assigment
// =, +=, -=, *=, %=, .= 
/*----------------------*/ 

/*----------------------*/ 
//Perbandingan ->membandingan nilai doang
// <, >,<=, >=, ==, !=
/*----------------------*/ 

/*----------------------*/ 
// identitas ->membandingkan nilai dan tipe data
// ===, !==
/*----------------------*/ 

/*----------------------*/ 
//Logika -> perbandingan
// &&, ||, !
/*----------------------*/ 

?>
<!-- php di dalam html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Helo, Selamat Datang <?php echo $nama; ?>. php di dalam html</h1>
</body>
</html>

<!-- ------------------- -->
<br>
<!-- html di dalam php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<?php echo "<h1>Helo, Selamat Datang Evi. html di dalam php</h1>"; ?>
</body>
</html>