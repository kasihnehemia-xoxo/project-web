<?php
$nama = "Kasih Nehemia Sitorus";
$nim = "E41262556";
$umur = "18";
$tinggi = "155.5";
$status = "true";

echo "Nama: " . $nama . "<br>";
echo "NIM: " . $nim . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Tinggi: " . $tinggi . " cm<br>";
echo "Status Aktif: " . $status . "<br>";
?>

<?php
$nama = "Kasih ";
$umur = 18;
$ipk = 4.0;
$mahasiswa = true;

var_dump($nama);
var_dump($umur);
var_dump($ipk);
var_dump($mahasiswa);
?>

<?php
$nama = "Andi";
$umur = 19;

echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";

$nama = "Budi";
$umur = 20;

echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur;
?>

<?php
$a = 35;
$b = 7;

echo "Penjumlahan: " . ($a + $b) . "<br>";
echo "Pengurangan: " . ($a - $b) . "<br>";
echo "Perkalian: " . ($a * $b) . "<br>";
echo "Pembagian: " . ($a / $b) . "<br>";
echo "Sisa pembagian: " . ($a % $b);
?>

<?php
$nilai = 55;
var_dump($nilai >= 60);
var_dump($nilai < 60);
var_dump($nilai == 75);
?>

<?php
$kehadiran = 60;
$nilai_tugas = 40;
$boleh_ujian = $kehadiran >= 75 && $nilai_tugas >= 60;
var_dump($boleh_ujian);
?>

<?php
$nilai = 18;
if ($nilai >= 18) {
    echo "Anda sudah memenuhi syarat";
}
?>

<?php
$nilai = 70;
if ($nilai >= 60) {
    echo "LULUS" . "<br>";
} else {
    echo "TIDAK LULUS" . "<br>";
}
?>

<?php
$nilai = 80;
if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 60) {
    $grade = "C";
} elseif ($nilai >= 50) {
    $grade = "D";
} else {
    $grade = "E";
}

echo "Nilai: " . $nilai . "<br>";
echo "Grade: " . $grade . "<br>";
?>

<?php
$hari = 3;
switch ($hari) {
    case 1: echo "Senin"; break;
    case 2: echo "Selasa"; break;
    case 3: echo "Rabu"; break; 
    case 4: echo "Kamis"; break;
    case 5: echo "Jumat"; break;
    case 6: echo "Sabtu"; break;
    case 7: echo "Minggu"; break;
    default: echo "Nomor hari tidak valid";

}
?>

<?php


    echo "<br>";

?>

<?php
$i = 2;
while ($i <= 5) {
    echo "Perulangan ke-" . $i . "<br>";
    $i++;
}
?>

<?php
$i = 1;
do {
    echo "Data ke-" . $i . "<br>";
    $i++;
} while ($i <= 5);
?>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Data ke-" . $i . "<br>";
}
?>

<?php
$mahasiswa = ["Andi", "Budi", "Citra", "Dina"];
foreach ($mahasiswa as $nama) {
    echo $nama . "<br>";
}
?>