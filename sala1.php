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
        <ol><a href="sala2.php">Sala2</a></ol><ol><a href="sala3.php">Sala3</a></ol><ol><a href="sala4.php">Sala4</a></ol>

    </nav>

</div>




<div id="print-area">
       <div class="screen">Ekran</div>
    <div class="cinema-hall">



        <?php
        $rows= [
                1 => range(11,1),
                2=> range(15,1),
                3=>range(15,1),
                4=>range(15,1),
                5=>range(15,1),
                6=>range(15,1),
                7=>range(15,1),
                8=>range(19,1),






        ];

        foreach($rows as $rowNum => $seats) {
            echo "<div class='row row-$rowNum'>";

            echo "<div class='row-number'>$rowNum</div>";

            foreach ($seats as $seatNum) {
                echo "<div class='seat' title='Rząd $rowNum ,Miejsce $seatNum'>$seatNum</div>";
            }

            echo "<div class='row-number'>$rowNum</div>";

            echo "</div>";
        }
        ?>


    </div>


</div>

<button onclick="window.print()">Drukuj</button>

<a style="background-color: #29abe2; text-decoration: none; border: solid black 2px"  href="stronaglowna.php">Strona główna</a>


</body>



</html>