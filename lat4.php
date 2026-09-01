<?php
$angka = -92;

if ($angka >= 1 && $angka <= 100) {
    if ($angka >= 91 && $angka <= 100) {
        $predikat = "lulus";
        $grade = "A";
    } elseif ($angka >= 81 && $angka <= 90) {
        $predikat = "lulus";
        $grade = "B";
    } elseif ($angka >= 71 && $angka <= 80) {
        $predikat = "lulus";
        $grade = "C";
    } else {
        $predikat = "tidak lulus";
        $grade = "D";
    }

    echo "nilai : " . $angka . "<br>";
    echo "predikat : " . $predikat . "<br>";
    echo "grade : " . $grade . "<br>";

} else {
    echo "Angka hanya boleh dari 1-100";
}
?>