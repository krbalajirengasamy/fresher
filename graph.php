<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <center>
    <h3>FILL THE 'X' AND 'Y' VALUES </h3><br>
    <form method="post" action="">
        <label>x</label><input type="number" name="x" ><br><br>
        <label>y</label><input type="number" name="y" ><br><br>
        <input type="submit"  name="submit" value="RESULT" >
       </form>
    <?php
    if(isset($_POST["submit"])){
    $x=$_POST['x'];
    $y=$_POST['y'];

if($x>0 and $y>0){
echo"<h1>first quadrent</h1>";
}
elseif($x<0 and $y>0){
echo"<h1>second quadrent</h1>";
}
elseif($x<0 and $y<0){
echo"<h1>third quadrent</h1>";
}
elseif($x>0 and $y<0){
echo"<h1>fourth quadrent</h1>";
}
    elseif($x==0 and $y==0){
    echo"<h1>orgin is center</h1>";
    }
    echo "";
}
?>

       </center>
</body>
</html>