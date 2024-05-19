<?php
// Membuat array dengan nama dan umur
$data = array(
    array("nama" => "Alice", "umur" => 25),
    array("nama" => "Bob", "umur" => 30),
    array("nama" => "Charlie", "umur" => 20),
    array("nama" => "David", "umur" => 28),
    array("nama" => "Eve", "umur" => 22),
    array("nama" => "Frank", "umur" => 35),
    array("nama" => "Grace", "umur" => 18),
    array("nama" => "Hannah", "umur" => 27),
    array("nama" => "Ian", "umur" => 29),
    array("nama" => "Julia", "umur" => 32),
    array("nama" => "Kevin", "umur" => 21),
    array("nama" => "Lily", "umur" => 23),
    array("nama" => "Michael", "umur" => 26),
    array("nama" => "Nancy", "umur" => 31),
    array("nama" => "Olivia", "umur" => 19),
    array("nama" => "Peter", "umur" => 33),
    array("nama" => "Quinn", "umur" => 24),
    array("nama" => "Rachel", "umur" => 34),
    array("nama" => "Simon", "umur" => 36)
);

// Konversi array ke JSON
$json = json_encode($data);

// Tampilkan JSON
echo $json;

?>
