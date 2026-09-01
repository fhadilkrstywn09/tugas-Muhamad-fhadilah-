<?php
$hari = "kamis";

if ($hari === "senin") {
    echo "putih abu";
} else if ($hari === "selasa" || $hari === "kamis") {
    echo "seragam jurusan";
} else if ($hari === "rabu") {
    echo "almet";
} else if ($hari === "jumat") {
    echo "pramuka";
} else {
    echo "hari libur, tidak pakai seragam";
}
?>