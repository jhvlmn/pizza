<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a class="active" href="bestellen.html">Pizza bestellen</a></li>
        <li><a  href="contact.html">Contact</a></li>
        <li style="float:right"><a href="about.html">About</a></li>
    </ul>
</nav>
<main>

   <h1>Uw bestelling</h1>

   <table>
    <tr>
        <td>Pizza</td>
        <td>Aantal</td>
        <td>Prijs</td>
    </tr>
   <?php

    //Totaalprijs op 0 zetten
    $totaalPrijs = 0;

    //Aantal bestelde Hawai pizza's ophalen
    $aantalHawai = $_POST["aantalHawai"];
    //Totaalprijs ophogen
    $totaalPrijs += $aantalHawai * 10;
    //Pizza op het scherm tonen
    echo "<tr>";
        echo "<td>Hawai</td>";
        echo "<td> $aantalHawai </td>";
        echo "<td>". $aantalHawai * 10 ." </td>";
    echo "</tr>";
    
    ?>
    <tr>
        <td>Totaal te betalen</td>
        <td colspan="2" align="right"><?php echo $totaalPrijs; ?></td>
    </tr>
    </table>

</main>

</body>
</html>


