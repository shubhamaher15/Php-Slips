<html>
<body>
<form method="POST" action="Armstorng no.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["t1"];
    $s = $n;
    $sum = 0;

    while ($n > 0) {
        $d = $n % 10;
        $sum = $sum + $d * $d * $d;
        $n = (int)($n, 10);
    }

    if ($s == $sum) {
        echo "Number is Armstrong: " . $s;
    } else {
        echo "Number is not Armstrong: " . $s;
    }
}
?>

</body>
</html>
