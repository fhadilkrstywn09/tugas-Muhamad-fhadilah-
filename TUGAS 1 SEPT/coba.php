<?php
$angka = [
    [21, 22, 23, 24],
    [31, 32, 33, 34],
    [41, 42, 43, 44]
];

for ($i = 0; $i < count($angka); $i++) {
    for ($j = 0; $j < count($angka[$i]); $j++) {
      if ($j == 0 || $j == 3) {
            echo $angka[$i][$j] . " ";
        }
    }
    echo "<br>";
}
?>