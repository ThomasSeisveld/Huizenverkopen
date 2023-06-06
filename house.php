<!DOCTYPE html>
<html>
<head>
    <title>House Details</title>
</head>
<body>
    <?php
    if (isset($_GET['i'])) {
        $house_id = $_GET['i'];


        $address = "";
        $postcode = "";
        $price = "";

        if ($house_id == "huis1") {
            $address = "Zijdeweg 26";
            $postcode = "2244 BG Wassenaar";
            $price = "€ 1.365.000";
        } elseif ($house_id == "huis2") {
            $address = "Botersloot 545";
            $postcode = "3011 HE Rotterdam";
            $price = "€ 1.570.000";
        } elseif ($house_id == "huis3") {
            $address = "Botersloot 547";
            $postcode = "3011 HE Rotterdam";
            $price = "€ 1.975.000";
        } elseif ($house_id == "huis4") {
            $address = "Wijnhaven 73 X";
            $postcode = "2244 WK Rotterdam";
            $price = "€ 1.850.000";
        } else {
            echo "House not found.";
        }

        echo "<h1>House Details</h1>";
        echo "<h4 class='huis' style='color: #2AA2D6;'>$address</h4>";
        echo "<p class='huis'>$postcode</p>";
        echo "<p class='huis'><b>$price</b></p>";
    } else {
        echo "Invalid request.";
    }
    ?>
</body>
</html>
