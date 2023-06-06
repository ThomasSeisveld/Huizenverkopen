<?php
$d = "huis1";

$address = "";
$postcode = "";
$price = "";

if ($id == "huis1") {
    $address = "Zijdeweg 26";
    $postcode = "2254 BH";
    $price = "€1.365.000";
} elseif ($id == "huis2") {
    $address = "Botersloot 545";
    $postcode = "3011 HE";
    $price = "€1.570.000";
} elseif ($id == "huis3") {
    $address = "Botersloot 547";
    $postcode = "3011 HE";
    $price = "€1.975.000";
} elseif ($id == "huis4") {
    $address = "Wijnhaven 73 X";
    $postcode = "2244 WK";
    $price = "€1.850.000";
} else {
    echo "House not found.";
}

echo "<h4 class='huis' style='color: #2AA2D6;'>$address</h4>";
echo "<p class='huis'>$postcode</p>";
echo "<p class='huis'><b>$price</b></p>";
?>