<!DOCTYPE html>
<html>
<head>
    <title>Generated Calendar</title>
</head>
<body>
    <center>
    <h2>Generated Calendar</h2>
    <form method="post" action="">
        <label for="year">Year:</label>
        <input type="number" id="year" name="year" required>
        <br><br>
        <label for="month">Month:</label>
        <input type="number" id="month" name="month" min="1" max="12" required>
        <br><br>
        <button type="submit">submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST["year"];
        $month = $_POST["month"];
        function generateCalendar($year, $month) {
            $firstDay = strtotime("$year-$month-01");
            $daysInMonth = date("t", $firstDay);
            $firstDayOfWeek = date("w", $firstDay);
            echo "<table border='3'>";
            echo "<tr><th colspan='7'>" . date("F Y", $firstDay) . "</th></tr>";
            echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";
            $dayCounter = 1;
            $currentDay = 1;
            while ($currentDay <= $daysInMonth) {
                echo "<tr>";
                for ($i = 0; $i < 7; $i++) {
                    if ($currentDay > $daysInMonth) {
                        echo "<td>&nbsp;</td>";
                    } else {
                        if ($i < $firstDayOfWeek && $currentDay == 1) {
                            echo "<td>&nbsp;</td>";
                        } else {
                            echo "<td>$currentDay</td>";
                            $currentDay++;
                        }
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        generateCalendar($year, $month); 

    }
        ?>
    <br>
    </center>
</body>
</html>
