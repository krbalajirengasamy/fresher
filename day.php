<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
<center>
<h2>Enter Date:</h2>
<form method="post">
    <label for="day">Day:</label>
    <input type="number" id="day" name="day" min="1" max="31" required>
    <br><br>
    <label for="month">Month:</label>
    <input type="number" id="month" name="month" min="1" max="12" required>
    <br><br>
    <label for="year">Year:</label>
    <input type="number" id="year" name="year" min="1900" max="2099" required>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    
    $dateString = $year . "-" . $month . "-" . $day;
    $dayOfWeek = date("l", strtotime($dateString));
    
    echo "<h2>Result:</h2>";
    echo "The day of the week for $day/$month/$year is: $dayOfWeek";
}
?>
</center>
</body>
</html>
