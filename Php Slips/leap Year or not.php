<html>
<form method="POST" action="leap Year or not.php">
Enter Year:
<input type="Text" name="s1"><br>
<input type="submit" value="Check">
</form>
</html>
<?php
$n=$_POST["s1"];
{
if($n%4==0)
Echo("Leap year<br>");
else
Echo("Not leap Year");
}
?>