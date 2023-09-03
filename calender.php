<!DOCTYPE html>
<html>
<head>
  <title>Calendar Program</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<center>
    <h2>Calendar Program</h2>
    <form method="post" action="">
        <label for="year">Enter Year: </label>
        <input type="text" class="form-controll" name="year" id="year">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    <?php
    function getFirstSunday($year, $month) {
        return date('Y-m-d', strtotime("first sunday of $year-$month"));
    }

    function getSecondSunday($year, $month) {
        return date('Y-m-d', strtotime("second sunday of $year-$month"));
    }

    function getThirdSunday($year, $month) {
        return date('Y-m-d', strtotime("third sunday of $year-$month"));
    }

    function getFourthSunday($year, $month) {
        return date('Y-m-d', strtotime("fourth sunday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januaryFirstSunday = getFirstSunday($year, 1);
        $februarySecondSunday = getSecondSunday($year, 2);
        $marchThirdSunday = getThirdSunday($year, 3);
        $aprilFourthSunday = getFourthSunday($year, 4);
        $mayFirstSunday = getFirstSunday($year, 5);
        $juneSecondSunday = getSecondSunday($year, 6);
        $julyThirdSunday = getThirdSunday($year, 7);
        $augustFourthSunday = getFourthSunday($year, 8);
        $septamberFirstSunday = getFirstSunday($year, 9);
        $octoberSecondSunday = getSecondSunday($year, 10);
        $novemberThirdSunday = getThirdSunday($year, 11);
        $decemberFourthSunday = getFourthSunday($year, 12);
        echo "</table>";
        $a=$januaryFirstSunday;
        $b=$februarySecondSunday;
        $c=$marchThirdSunday;
        $d=$aprilFourthSunday;
        $e=$mayFirstSunday;
        $f=$juneSecondSunday;
        $g=$julyThirdSunday;
        $h=$augustFourthSunday;
        $i=$septamberFirstSunday;
        $j=$octoberSecondSunday;
        $k=$novemberThirdSunday;
        $l=$decemberFourthSunday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::sunday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a."</th><th><th><th><th>".$e."</th></th></th></th></th></th><th><th><th><th>".$i."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b."<th><th><th><th>".$f."</th></th></th></th></th></th><th><th><th><th>".$j."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c."<th><th><th></th></th></th></th></th></th><th>".$g."<th><th><th><th>".$k."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d."<th><th></th></th></th></th></th></th><th><th>".$h."<th><th><th><th>".$l."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    //monday
    
    function getSecondMonday($year, $month) {
        return date('Y-m-d', strtotime("second monday of $year-$month"));
    }

    function getThirdMonday($year, $month) {
        return date('Y-m-d', strtotime("third monday of $year-$month"));
    }

    function getFourthMonday($year, $month) {
        return date('Y-m-d', strtotime("Fourth monday of $year-$month"));
    }

    function getFirstMonday($year, $month) {
        return date('Y-m-d', strtotime("first monday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januarySecondMonday = getSecondMonday($year, 1);
        $februaryThirdMonday = getThirdMonday($year, 2);
        $marchFourthMonday = getFourthMonday($year, 3);
        $aprilFirstMonday = getFirstMonday($year, 4);
        $maySecondMonday = getSecondMonday($year, 5);
        $juneThirdMonday = getThirdMonday($year, 6);
        $julyFourthMonday = getFourthMonday($year, 7);
        $augustFirstMonday = getFirstMonday($year, 8);
        $septamberSecondMonday = getSecondMonday($year, 9);
        $octoberThirdMonday = getThirdMonday($year, 10);
        $novemberFourthMonday = getFourthMonday($year, 11);
        $decemberFirstMonday = getFirstMonday($year, 12);
        echo "</table>";
        $a1=$januarySecondMonday;
        $b1=$februaryThirdMonday;
        $c1=$marchFourthMonday;
        $d1=$aprilFirstMonday;
        $e1=$maySecondMonday;
        $f1=$juneThirdMonday;
        $g1=$julyFourthMonday;
        $h1=$augustFirstMonday;
        $i1=$septamberSecondMonday;
        $j1=$octoberThirdMonday;
        $k1=$novemberFourthMonday;
        $l1=$decemberFirstMonday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::monday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a1."</th><th><th><th><th>".$e1."</th></th></th></th></th></th><th><th><th><th>".$i1."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b1."<th><th><th><th>".$f1."</th></th></th></th></th></th><th><th><th><th>".$j1."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c1."<th><th><th></th></th></th></th></th></th><th>".$g1."<th><th><th><th>".$k1."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d1."<th><th></th></th></th></th></th></th><th><th>".$h1."<th><th><th><th>".$l1."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    //thusday
    function getThirdTuesday($year, $month) {
        return date('Y-m-d', strtotime("third tuesday of $year-$month"));
    }

    function getFourthTuesday($year, $month) {
        return date('Y-m-d', strtotime("fourth tuesday of $year-$month"));
    }

    function getFirstTuesday($year, $month) {
        return date('Y-m-d', strtotime("first tuesday of $year-$month"));
    }

    function getSecondTuesday($year, $month) {
        return date('Y-m-d', strtotime("Second tuesday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januaryThirdTuesday = getThirdTuesday($year, 1);
        $februaryFourthTuesday = getFourthTuesday($year, 2);
        $marchFirstTuesday = getFirstTuesday($year, 3);
        $aprilSecondTuesday = getSecondTuesday($year, 4);
        $mayThirdTuesday = getThirdTuesday($year, 5);
        $juneFourthTuesday = getFourthTuesday($year, 6);
        $julyFirstTuesday = getFirstTuesday($year, 7);
        $augustSecondTuesday = getSecondTuesday($year, 8);
        $septamberThirdTuesday = getThirdTuesday($year, 9);
        $octoberFourthTuesday = getFourthTuesday($year, 10);
        $novemberFirstTuesday = getFirstTuesday($year, 11);
        $decemberSecondTuesday = getSecondTuesday($year, 12);
        echo "</table>";
        $a2=$januaryThirdTuesday;
        $b2=$februaryFourthTuesday;
        $c2=$marchFirstTuesday;
        $d2=$aprilSecondTuesday;
        $e2=$mayThirdTuesday;
        $f2=$juneFourthTuesday;
        $g2=$julyFirstTuesday;
        $h2=$augustSecondTuesday;
        $i2=$septamberThirdTuesday;
        $j2=$octoberFourthTuesday;
        $k2=$novemberFirstTuesday;
        $l2=$decemberSecondTuesday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::tuesday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a2."</th><th><th><th><th>".$e2."</th></th></th></th></th></th><th><th><th><th>".$i2."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b2."<th><th><th><th>".$f2."</th></th></th></th></th></th><th><th><th><th>".$j2."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c2."<th><th><th></th></th></th></th></th></th><th>".$g2."<th><th><th><th>".$k2."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d2."<th><th></th></th></th></th></th></th><th><th>".$h2."<th><th><th><th>".$l2."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    //wednesday
    function getFourthWednesday($year, $month) {
        return date('Y-m-d', strtotime("Fourth wednesday of $year-$month"));
    }

    function getFirstWednesday($year, $month) {
        return date('Y-m-d', strtotime("First wednesday of $year-$month"));
    }

    function getSecondWednesday($year, $month) {
        return date('Y-m-d', strtotime("Second wednesday of $year-$month"));
    }

    function getThirdWednesday($year, $month) {
        return date('Y-m-d', strtotime("Third wednesday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januaryFourthWednesday = getFourthWednesday($year, 1);
        $februaryFirstWednesday = getFirstWednesday($year, 2);
        $marchSecondWednesday = getSecondWednesday($year, 3);
        $aprilThirdWednesday = getThirdWednesday($year, 4);
        $mayFourthWednesday = getFourthWednesday($year, 5);
        $juneFirstWednesday = getFirstWednesday($year, 6);
        $julySecondWednesday = getSecondWednesday($year, 7);
        $augustThirdWednesday = getThirdWednesday($year, 8);
        $septamberFourthWednesday = getFourthWednesday($year, 9);
        $octoberFirstWednesday = getFirstWednesday($year, 10);
        $novemberSecondWednesday = getSecondWednesday($year, 11);
        $decemberThirdWednesday = getThirdWednesday($year, 12);
        echo "</table>";
        $a3=$januaryFourthWednesday;
        $b3=$februaryFirstWednesday;
        $c3=$marchSecondWednesday;
        $d3=$aprilThirdWednesday;
        $e3=$mayFourthWednesday;
        $f3=$juneFirstWednesday;
        $g3=$julySecondWednesday;
        $h3=$augustThirdWednesday;
        $i3=$septamberFourthWednesday;
        $j3=$octoberFirstWednesday;
        $k3=$novemberSecondWednesday;
        $l3=$decemberThirdWednesday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::wednesday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a3."</th><th><th><th><th>".$e3."</th></th></th></th></th></th><th><th><th><th>".$i3."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b3."<th><th><th><th>".$f3."</th></th></th></th></th></th><th><th><th><th>".$j3."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c3."<th><th><th></th></th></th></th></th></th><th>".$g3."<th><th><th><th>".$k3."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d3."<th><th></th></th></th></th></th></th><th><th>".$h3."<th><th><th><th>".$l3."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    //thursday
    function getFirstThursday($year, $month) {
        return date('Y-m-d', strtotime("first Thursday of $year-$month"));
    }

    function getSecondThursday($year, $month) {
        return date('Y-m-d', strtotime("second Thursday of $year-$month"));
    }

    function getThirdThursday($year, $month) {
        return date('Y-m-d', strtotime("third Thursday of $year-$month"));
    }

    function getFourthThursday($year, $month) {
        return date('Y-m-d', strtotime("fourth Thursday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januaryFirstThursday = getFirstThursday($year, 1);
        $februarySecondThursday = getSecondThursday($year, 2);
        $marchThirdThursday = getThirdThursday($year, 3);
        $aprilFourthThursday = getFourthThursday($year, 4);
        $mayFirstThursday = getFirstThursday($year, 5);
        $juneSecondThursday = getSecondThursday($year, 6);
        $julyThirdThursday = getThirdThursday($year, 7);
        $augustFourthThursday = getFourthThursday($year, 8);
        $septamberFirstThursday = getFirstThursday($year, 9);
        $octoberSecondThursday = getSecondThursday($year, 10);
        $novemberThirdThursday = getThirdThursday($year, 11);
        $decemberFourthThursday = getFourthThursday($year, 12);
        echo "</table>";
        $a4=$januaryFirstThursday;
        $b4=$februarySecondThursday;
        $c4=$marchThirdThursday;
        $d4=$aprilFourthThursday;
        $e4=$mayFirstThursday;
        $f4=$juneSecondThursday;
        $g4=$julyThirdThursday;
        $h4=$augustFourthThursday;
        $i4=$septamberFirstThursday;
        $j4=$octoberSecondThursday;
        $k4=$novemberThirdThursday;
        $l4=$decemberFourthThursday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::thursday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a4."</th><th><th><th><th>".$e4."</th></th></th></th></th></th><th><th><th><th>".$i4."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b4."<th><th><th><th>".$f4."</th></th></th></th></th></th><th><th><th><th>".$j4."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c4."<th><th><th></th></th></th></th></th></th><th>".$g4."<th><th><th><th>".$k4."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d4."<th><th></th></th></th></th></th></th><th><th>".$h4."<th><th><th><th>".$l4."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    //friday
    function getSecondFriday($year, $month) {
        return date('Y-m-d', strtotime("second Friday of $year-$month"));
    }

    function getThirdFriday($year, $month) {
        return date('Y-m-d', strtotime("third Friday of $year-$month"));
    }

    function getFourthFriday($year, $month) {
        return date('Y-m-d', strtotime("Fourth Friday of $year-$month"));
    }

    function getFirstFriday($year, $month) {
        return date('Y-m-d', strtotime("first Friday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januarySecondFriday = getSecondFriday($year, 1);
        $februaryThirdFriday = getThirdFriday($year, 2);
        $marchFourthFriday = getFourthFriday($year, 3);
        $aprilFirstFriday = getFirstFriday($year, 4);
        $maySecondFriday = getSecondFriday($year, 5);
        $juneThirdFriday = getThirdFriday($year, 6);
        $julyFourthFriday = getFourthFriday($year, 7);
        $augustFirstFriday = getFirstFriday($year, 8);
        $septamberSecondFriday = getSecondFriday($year, 9);
        $octoberThirdFriday = getThirdFriday($year, 10);
        $novemberFourthFriday = getFourthFriday($year, 11);
        $decemberFirstFriday = getFirstFriday($year, 12);
        echo "</table>";
        $a5=$januarySecondFriday;
        $b5=$februaryThirdFriday;
        $c5=$marchFourthFriday;
        $d5=$aprilFirstFriday;
        $e5=$maySecondFriday;
        $f5=$juneThirdFriday;
        $g5=$julyFourthFriday;
        $h5=$augustFirstFriday;
        $i5=$septamberSecondFriday;
        $j5=$octoberThirdFriday;
        $k5=$novemberFourthFriday;
        $l5=$decemberFirstFriday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::Friday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a5."</th><th><th><th><th>".$e5."</th></th></th></th></th></th><th><th><th><th>".$i5."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b5."<th><th><th><th>".$f5."</th></th></th></th></th></th><th><th><th><th>".$j5."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c5."<th><th><th></th></th></th></th></th></th><th>".$g5."<th><th><th><th>".$k5."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d5."<th><th></th></th></th></th></th></th><th><th>".$h5."<th><th><th><th>".$l5."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    //saturday
    
   function getThirdSaturday($year, $month) {
        return date('Y-m-d', strtotime("third Saturday of $year-$month"));
    }

    function getFourthSaturday($year, $month) {
        return date('Y-m-d', strtotime("fourth Saturday of $year-$month"));
    }

    function getFirstSaturday($year, $month) {
        return date('Y-m-d', strtotime("first Saturday of $year-$month"));
    }

    function getSecondSaturday($year, $month) {
        return date('Y-m-d', strtotime("Second Saturday of $year-$month"));
    }

    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        $januaryThirdSaturday = getThirdSaturday($year, 1);
        $februaryFourthSaturday = getFourthSaturday($year, 2);
        $marchFirstSaturday = getFirstSaturday($year, 3);
        $aprilSecondSaturday = getSecondSaturday($year, 4);
        $mayThirdSaturday = getThirdSaturday($year, 5);
        $juneFourthSaturday = getFourthSaturday($year, 6);
        $julyFirstSaturday = getFirstSaturday($year, 7);
        $augustSecondSaturday = getSecondSaturday($year, 8);
        $septamberThirdSaturday = getThirdSaturday($year, 9);
        $octoberFourthSaturday = getFourthSaturday($year, 10);
        $novemberFirstSaturday = getFirstSaturday($year, 11);
        $decemberSecondSaturday = getSecondSaturday($year, 12);
        echo "</table>";
        $a2=$januaryThirdSaturday;
        $b2=$februaryFourthSaturday;
        $c2=$marchFirstSaturday;
        $d2=$aprilSecondSaturday;
        $e2=$mayThirdSaturday;
        $f2=$juneFourthSaturday;
        $g2=$julyFirstSaturday;
        $h2=$augustSecondSaturday;
        $i2=$septamberThirdSaturday;
        $j2=$octoberFourthSaturday;
        $k2=$novemberFirstSaturday;
        $l2=$decemberSecondSaturday;
        echo "<table class='table table-bordered'>
        <thead>
            <tr>
                <th>::Saturday:: </th>
            <th>jan</th>
            <th>feb</th>
            <th>mar</th>
            <th>apr</th>
            <th>may</th>
            <th>jun</th>
            <th>jul</th>
            <th>aug</th>
        <th>sep</th>
        <th>oct</th>
        <th>nov</th>
        <th>dec</th>
        </tr>
        </thead>
        <tbody>
            <tr><th>week1</th><th>".$a2."</th><th><th><th><th>".$e2."</th></th></th></th></th></th><th><th><th><th>".$i2."<th><th></th></th></th></th></th></th></tr>
            <tr><th>week2</th><th><th>".$b2."<th><th><th><th>".$f2."</th></th></th></th></th></th><th><th><th><th>".$j2."<th></th></th></th></th></th></tr>
            <tr><th>week3</th><th><th><th>".$c2."<th><th><th></th></th></th></th></th></th><th>".$g2."<th><th><th><th>".$k2."</th></th></th></th></th></tr>
            <tr><th>week4</th><th><th><th><th>".$d2."<th><th></th></th></th></th></th></th><th><th>".$h2."<th><th><th><th>".$l2."</th></th></th></th></th></th></th></tr>
           
        </tbody>
    </table>";
    }
    
    ?>

       </center>
</body>
</html>
