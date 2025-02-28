
<html>
<body>
<form method="POST" action="sleep No 3.php">
    Enter No 1:
    <input type="text" name="t1"><br>
    Enter No 2:
    <input type="text" name="t2"><br>
    <input type="radio" name="r1" value="a">Addition<br>
    <input type="radio" name="r1" value="b">Subtraction<br>
    <input type="radio" name="r1" value="c">Multiplication<br>
    <input type="radio" name="r1" value="d">Division<br>
    <input type="submit" value="Calculate"><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST["t1"];
    $b = $_POST["t2"];
    $ch = $_POST["r1"];
    
    if ($ch == "a")
        Addition($a, $b);
    if ($ch == "b")
        Subtraction($a, $b);
    if ($ch == "c")
        Multiplication($a, $b);
    if ($ch == "d")
        Division($a, $b);
}

function Addition($a, $b) {
    $c = $a + $b;
    echo("Addition : " . $c);
}

function Subtraction($a, $b) {
    $c = $a - $b;
    echo("Subtraction : " . $c);
}

function Multiplication($a, $b) {
    $c = $a * $b;
    echo("Multiplication : " . $c);
}

function Division($a, $b) {
    $c = $a / $b;
    echo("Division : " . $c);
}
?>
</body>
</html>
