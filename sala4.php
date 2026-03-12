<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Układ sali kinowej</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="menu">

    <nav>
        <ol><a href="sala1.php">Sala1</a></ol><ol><a href="sala2.php">Sala2</a></ol><ol><a href="sala3.php">Sala3</a></ol>

    </nav>

</div>






<div class="screen">Ekran</div>
<div class="cinema-hall">



    <?php

    $rows =[
        1 => range(1,6),

        2=> range(1,12),
        3 => range(1,13),
        4 => range(1,14),
        5 => range(1,17)

    ];
    foreach ($rows as $rowNum => $seats){
        echo "<div class='row row-$rowNum'>";

        echo "<div class='row-number'>$rowNum</div>";

        foreach ($seats as $seatNum){
            echo "<div class='seat' title=Rząd $rowNum, Miejsce $seatNum'>$seatNum</div>";

        }

        echo "<div class='row-number'>$rowNum</div>";

        echo "</div>";
    }


    ?>


</div>


</body>