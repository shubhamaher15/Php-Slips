<html>
<body>
    <form action="slip No 9.php" method="POST">
        <h3>Enter radius: 
        <input type="text" name="t1"><br></h3>
        <h3>Enter height: 
        <input type="text" name="t2"><br><br></h3>
        <input type="submit">
    </form>
</body>
</html>

<?php
error_reporting(0);
    $r = $_POST["t1"];
    $h = $_POST["t2"];
    define('PI', 3.14);

    function calculateArea($r, $h) 
   {
        $area = 2 * PI * $r * ($r + $h);
        return $area;
    }
    function calculateVolume($r, $h) 
   {
        $vol = PI * $r * $r * $h;
        return $vol;
    }
    $area = calculateArea($r, $h);
    $volume = calculateVolume($r, $h);

    echo("<br>Area of cylinder: " . $area);
    echo("<br>Volume of cylinder: " . $volume);
?>
