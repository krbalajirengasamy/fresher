<!DOCTYPE html>
<html>
<head>
    <title>boot</title>
</head>
<body>
    <center>
    <h3>MATHS TABLE</h3>
    <form method="post" action="">
        <lable>table value</lable>
        <input type="number" name="table_value"><br><br>
        <lable>rows</lable>
        <input type="number" name="rows"><br><br>
        <input type="submit" name="submit" value="submit">  
    </form>
    <?php
    if(isset($_POST['submit'])){
        $table=$_POST['table_value'];
        $row=$_POST['rows'];
    for ($i = 1; $i <= $row; $i++) {
        $result = $i * $table;
        echo "$i*$table=$result<br>";
    }
    }
?>
    </center>
</body>
</html>