<?php

$hari = "Selasa";

switch ($hari) {
    case 'Senin':
        echo "Hari " . $hari . "<br>";
        echo "Seragam : Putih Abu";
        break;

    case ($hari == "Selasa") || ($hari == "Kamis"):
        echo "Hari " . $hari . "<br>";
        echo "Seragam Jurusan";
        break;
       
    case 'Rabu':
        echo "Hari " . $hari . "<br>";
        echo "Seragam Almet";
        break;
        
    case 'Jumat':
        echo "Hari " . $hari . "<br>";
        echo "Seragam Pramuka";
        break;
        
    default:
        echo "Hari " . $hari . "<br>";
        echo "Hari Libur, silahkan pake baju yang kamu suka";
        break;
}