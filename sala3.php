<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Układ Sali Kinowej</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="menu">

    <nav>
        <ol><a href="sala1.php">Sala1</a></ol><ol><a href="sala2.php">Sala2</a></ol><ol><a href="sala4.php">Sala4</a></ol>

    </nav>

</div>





<div class="screen">Ekran</div>

<div class="cinema-hall">
    <?php
    // Definicja liczby miejsc w każdym rzędzie na podstawie obrazka
    $rows = [
        1  => range(1, 23),
        2  => range(1, 26),
        3  => range(1, 27),
        4  => range(1, 26),
        5  => range(1, 27),
        6  => range(1, 26),
        7  => range(1, 27),
        8  => range(1, 26),
        9  => range(1, 27),
        10 => range(1, 26),
        11 => range(1, 27),
        12 => range(1, 26),
        13 => range(1, 27),
        14 => range(1, 33),
    ];

    foreach ($rows as $rowNum => $seats) {
        echo "<div class='row row-$rowNum'>";

        // Numer rzędu z lewej
        echo "<div class='row-number'>$rowNum</div>";

        // Generowanie miejsc
        foreach ($seats as $seatNum) {
            echo "<div class='seat' id='' title='Rząd $rowNum, Miejsce $seatNum'>$seatNum</div>";
        }

        // Numer rzędu z prawej
        echo "<div class='row-number'>$rowNum</div>";

        echo "</div>";
    }
    ?>
</div>

<a style="border: solid black 2px;border-radius:2px;background-color: #29abe2;text-decoration: none; " href="stronaglowna.php">Strona główna</a>
</body>
</html>