<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Układ Sali Kinowej</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

<div id="menu">
    <div class="navigation">
        <ol><a href="sala1.php">Sala 1</a></ol>
        <ol><a href="sala2.php">Sala 2</a></ol>
        <ol><a href="sala3.php">Sala 3</a></ol>
        <ol><a href="sala4.php">Sala 4</a></ol>
    </div>
</div>

<div id="textInputs">
    <label for="movieName">Nazwa filmu</label>
    <input type="text" id="movieName"><br>
    <p>Sala 3</p>
</div>

<div id="print-area">
    <div class="screen">Ekran</div>
    <div class="cinema-hall" id="c">
        <?php
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

        $counter = 0;
        foreach ($rows as $rowNum => $seats) {
            // Start bloku z miejscami
            echo "<div class='row row-$rowNum'>";
            // Numery rzędu z lewej
            echo "<div class='row-number'>$rowNum</div>";

            foreach ($seats as $seatNum) {
                $uniqueId = "s_" . $counter++;

                echo "<div class='seat' title='Rząd $rowNum, Miejsce $seatNum'>";
                echo "  <input type='checkbox' class='inputClass' id='$uniqueId' name='Miejsca' autocomplete='off'>";
                echo "  <label for='$uniqueId' class='seat-label'>$seatNum</label>";
                echo "</div>";
            }

            // Numer rzędu z prawej
            echo "<div class='row-number'>$rowNum</div>";
            // Zakończenie bloku z miejscami
            echo "</div>";
        }
        ?>
    </div>
</div>
<hr>
<div id="actions">
    <button onclick="printDiv()">Drukuj</button>
</div>

<div id="settingsForPrint">
    <h2>&darr; Ustawienia druku &darr;</h2>
    <p>Skala: niestandardowa &rarr; 110 &#124; Marginesy: minimalne</p>
</div>

<script src="../JS/druk.js"></script>
<script src="https://unpkg.com/selecto/dist/selecto.min.js"></script>
<script type="module" src="../JS/Operations.js"></script>
</body>
</html>