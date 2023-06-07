<!DOCTYPE html>
<html>
<head>
    <title>House Details</title>
    <meta charset="UTF-8">  

    <link rel="stylesheet" href="CSS/house.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/footer.css">   
</head>
<body>
<nav class="navbar"></nav>

    <?php
    if (isset($_GET['id'])) {
        $house_id = $_GET['id'];

        $address = "";
        $postcode = "";
        $price = "";
        $picture = "";
        $bouwjaar = "";
        $oppervlakte = "";
        $atlkamer = "";
        $atlbadkamer = "";
        $soort = "";

        if ($house_id == "huis1") {
            $address = "Zijdeweg 26";
            $postcode = "2244 BG Wassenaar";
            $price = "€ 1.365.000";
            $picture = "img/huis1.jpeg";
            $bouwjaar = "1910";
            $oppervlakte = "194 m²";
            $atlkamer = "8";
            $atlbadkamer = "1 badkamer (2 toilete)";
            $soort = "Villa, vrijstaande woning";

        } elseif ($house_id == "huis2") {
            $address = "Botersloot 545";
            $postcode = "3011 HE Rotterdam";
            $price = "€ 1.570.000";
            $picture = "img/huis2.jpeg";
            $bouwjaar = "2009";
            $oppervlakte = "218 m²";
            $atlkamer = "5 kamers (3 slaapkamers)";
            $atlbadkamer = "2 badkamers";
            $soort = "Apartament";

        } elseif ($house_id == "huis3") {
            $address = "Botersloot 547";
            $postcode = "3011 HE Rotterdam";
            $price = "€ 1.975.000";
            $picture = "img/huis3.jpeg";
            $bouwjaar = "2009";
            $oppervlakte = "225 m²";
            $atlkamer = "4 kamers (3 slaapkamers)";
            $atlbadkamer = "2 badkamers";
            $soort = "apartament";

        } elseif ($house_id == "huis4") {
            $address = "Wijnhaven 73 X";
            $postcode = "2244 WK Rotterdam";
            $price = "€ 1.850.000";
            $picture = "img/huis4.jpeg";
            $bouwjaar = "2019";
            $oppervlakte = "212 m²";
            $atlkamer = "4 kamers (2 slaapkamers)";
            $atlbadkamer = "1 apart toilet";
            $soort = "Apartament";

        } else {
            echo "House not found.";
        }
    } else {
        echo "Invalid request.";
    } 
    ?>

<section class="section4">
<div class="main">
    <img src='<?php echo $picture ?>' alt='House' class='huis-img' style='width: 600px;'>
    <h1> <?php echo $address ?></h1>
    <p class='huis'>Postcode: <?php echo $postcode ?></p>
    <p class='huis'>Prijs: <?php echo $price ?></p>
</div>

<div class="bieden">
    <?php 
    if (!isset($_SESSION['current_bid'])) {
        $_SESSION['current_bid'] = 0;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newBid = $_POST['bid'];
        
            if ($newBid > $_SESSION['current_bid']) {
                $_SESSION['current_bid'] = $newBid;
                echo "<p>Uw bod is geaccepteerd.</p>";
            } 
        }
        
        echo "Huidig bod: " . $_SESSION['current_bid'];
        echo "<form method='post' action=''>";
        echo "<input type='text' name='bid' placeholder='Voer uw bod in'>";
        echo "<input type='submit' value='Bieden'>";
        echo "</form>";
    }
    ?>

</div>

<div class="info">
    <h2>Informatie</h2> 
    <table>
        <tr>
            <td>Bouwjaar:</td>
            <td> <?php echo $bouwjaar ?></td>
        </tr>
        <tr>
            <td>Oppervlakte:</td>
            <td><?php echo $oppervlakte ?></td>
        </tr>
        <tr>
            <td>Antaal kamers:</td>
            <td><?php echo $atlkamer ?></td>
        </tr>
        <tr>
            <td>Antaal badkamers:</td>
            <td><?php echo $atlbadkamer ?></td>
        </tr>
        <tr>
            <td>Soort woning:</td>
            <td><?php echo $soort ?></td>
        </tr>
    </table>
</div>
</section>

<div class="footer">
        <hr class="hr-top">
        <img src="img/logo.png" id="logo-footer" alt="logo">
            <div class="footer-text">
                <a href="conditions.html">Conditions</a>               
                <a href="cookies.html">Cookies</a>

                &copy2023Villa4u

                <a href="privacy.html">Privacy</a>
                <a href="contact.html">Contact</a>
            </div>

        <hr class="hr-bottom">
    </div>

<script src="JS/Dev.js"></script>
</body>
</html>