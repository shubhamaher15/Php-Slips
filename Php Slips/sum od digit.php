<html>
<form method="POST" action="sum%20od%20digit.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="sum">
</form>

<?php 
$n=$_POST["t1"];
$sum=0;
while($n>0)
{
$d=$n%10;
$sum=$sum+$d;
  $n = (int)($n / 10);
}
echo("Sum of digit=" .$sum);
?>
</html>