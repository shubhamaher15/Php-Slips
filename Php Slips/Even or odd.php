<html>
<body>
<form method="post" action="even or odd.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="Check">
</form>
<?php 
  $n = $_POST["t1"];
  if($n % 2 == 0)
 {
    echo "Even No";
  }
 else
 {
    echo "Odd No";
  }

?>
</body>
</html>
