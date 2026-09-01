<?php
$products = [
    ["name" => "Telefon", "price" => 300, "qty" => 5],
    ["name" => "Noutbuk", "price" => 1000, "qty" => 2],
    ["name" => "Quloqchin", "price" => 50, "qty" => 10],
    ["name" => "Mishka", "price" => 20, "qty" => 15]
];

$total_amount = 0;
$summa = 0;

foreach ($products as $product) {
    $summa = $product["price"] * $product["qty"];
    printf("%s: %d\n", $product["name"], $summa);
    $total_amount += $summa;
}
echo "Jami: $total_amount";

?>