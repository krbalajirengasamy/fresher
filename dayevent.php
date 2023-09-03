<!DOCTYPE html>
<html>
<head>
    <title>Event Calendar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
        }
        .today {
            background-color: #FFFF99;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
<center>
<h2>SAVE THE EVENT IN CALENDAR</h2>
<form method="post" action="">
    <label>Event:</label>
    <input type="text" id="event" name="event" autocomplete="off"><br><br>
    <label for="inputYear">Year:</label>
    <input type="number" id="inputYear" name="inputYear" required min="" max="" autocomplete="off"><br><br>

    <label for="inputMonth">Month:</label>
    <input type="number" id="inputMonth" name="inputMonth" required min="1" max="12" autocomplete="off"><br><br>

    <label for="inputDay">Date:</label>
    <input type="number" id="inputDay" name="inputDay" required min="1" max="31" autocomplete="off"><br><br>

    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $inputYear = $_POST['inputYear'];
    $inputMonth = $_POST['inputMonth'];
    $inputDay = $_POST['inputDay'];
    $event = $_POST['event'];
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $inputMonth, $inputYear);
    $firstDayOfWeek = date('w', strtotime("$inputYear-$inputMonth-01"));
    echo '<h2>Calendar for ' . date('F Y', strtotime("$inputYear-$inputMonth-01")) . '</h2>';
    echo '<table border="1">';
    echo '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>';
    echo '<tr>';
    for ($i = 0; $i < $firstDayOfWeek; $i++) {
        echo '<td></td>';
    }
    $day = 1;
    while ($day <= $daysInMonth) {
        echo '<td>';
        if ($day == $inputDay) {
            echo '<a href="#" id="day'.$day.'" onclick="editEvent(' . $day .')">' . $day . '</a><br>';
                echo '<div id="event' . $day . '">' . $event . '</div>';
        } else {
            echo $day;
        }
        echo '</td>';
        if (($day + $firstDayOfWeek) % 7 == 0) {
            echo '</tr><tr>';
        }
        $day++;
    }
}
?>
    <script>
        function editEvent(day) {
            var newEvent = prompt('Edit event');
                var id = 'event' + day;
                var eventDay = document.getElementById(id);
                eventDay.innerText = newEvent;
        }
    </script>
</center>
</body>
</html>
