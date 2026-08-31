<?php

$tovarlar = [
    "yog" => ["narx" => 13000, "son" => 2],
    "gosht" => ["narx" => 11000, "son" => 4],
    "muzqaymoq" => ["narx" => 12000, "son" => 13],
];

$umumiy_summa = 0;
$summa = 0;

foreach ($tovarlar as $nom => $malumot) {
    $summa = $malumot["narx"] * $malumot["son"];
    echo "$nom: $summa so'm\n";
    $umumiy_summa += $summa;
}
echo "Umumiy summa: $umumiy_summa so'm\n";