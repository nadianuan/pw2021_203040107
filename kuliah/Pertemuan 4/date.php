<?php 
/*
Nadia Nur Annisa
203040107
https://github.com/nadianuan/pw2021_203040107
Pertemuan 4
Mempelajari mengenai Function
*/
?>

<?php 
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,09,04,2002));


// strtotime
echo date("l", strtotime("04 sep 2002"));
?>