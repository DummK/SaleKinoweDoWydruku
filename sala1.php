<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Układ Sali Kinowej</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="menu">
    <div class="navigation">
        <ol><a href="sala2.php">Sala2</a></ol>
        <ol><a href="sala3.php">Sala3</a></ol>
        <ol><a href="sala4.php">Sala4</a></ol>
    </div>
</div>

<div id="print-area">
    <div class="screen">Ekran</div>
    <div class="cinema-hall" id="c">
        <?php
            $rows= [
                    1 => range(15,1),
                    2 => range(15,1),
                    3 => range(15,1),
                    4 => range(15,1),
                    5 => range(15,1),
                    6 => range(15,1),
                    7 => range(15,1),
                    8 => range(19,1),
            ];

            $counter = 0;
            foreach($rows as $rowNum => $seats) {
                echo "<div class='row row-$rowNum'>";
                echo "<div class='row-number'>$rowNum</div>";

                foreach ($seats as $seatNum) {
                    $uniqueId = "s_" . $counter++;

                    if ($rowNum == 1 && ($seatNum >= 7 && $seatNum <= 10)) {
                        echo "<div class='unavailableSeat' title='Rząd $rowNum, Miejsce $seatNum'></div>";
                    } else if ($rowNum == 1 && ($seatNum > 10)) {
                        echo "<div class='seat' title='Rząd $rowNum, Miejsce $seatNum'>";
                        echo "  <input type='checkbox' class='inputClass' id='$uniqueId' name='Miejsca' autocomplete='off'>";
                        $result = $seatNum - 4;
                        echo "  <label for='$uniqueId' class='seat-label'>$result</label>";
                        echo "</div>";
                    } else {
                        echo "<div class='seat' title='Rząd $rowNum, Miejsce $seatNum'>";
                        echo "  <input type='checkbox' class='inputClass' id='$uniqueId' name='Miejsca' autocomplete='off'>";
                        echo "  <label for='$uniqueId' class='seat-label'>$seatNum</label>";
                        echo "</div>";
                    }
                }
                    echo "<div class='row-number'>$rowNum</div>";
                    echo "</div>";
                }
        ?>
    </div>
</div>
<hr>
<div id="actions">
    <button onclick="printDiv()">Drukuj</button>
</div>

    <script src="druk.js"></script>
    <script src="https://unpkg.com/selecto/dist/selecto.min.js"></script>
    <script type="module" src="Operations.js"></script>
</body>
</html>