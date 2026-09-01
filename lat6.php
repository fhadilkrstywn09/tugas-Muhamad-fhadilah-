<?php
$angka = -80;

    switch (true) {
        case ($angka >= 91 && $angka <= 100):
            $predikat = "lulus";
            $grade = "A";
            break;
        case ($angka >= 81 && $angka <= 90):
            $predikat = "lulus";
            $grade = "B";
            break;
        case ($angka >= 71 && $angka <= 80):
            $predikat = "lulus";
            $grade = "C";
            break;
        case ($angka >= 1 && $angka <= 70):
            $predikat = "tidak lulus";
            $grade = "D";
            break;
        default:
            echo "Angka hanya boleh dari 1-100";
            exit;
    }

    echo "nilai : " . $angka . "<br>";
    echo "predikat : " . $predikat . "<br>";
    echo "grade : " . $grade . "<br>";