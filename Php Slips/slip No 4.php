<html>
<body>
<form method="post" action="slip No 4.php">
enter string1:
<input type="text" name="r1"><br>
enter string2:
<input type="text" name="r2"><br>
enter string replace:
<input type="text" name="r3"><br>
<input type="radio" value=1 name="ch">occurance<br>
<input type="radio" value=2 name="ch">replace<br>
<input type="radio" value=3 name="ch">split<br>
<input type="submit" value="ok" >
</form>
</body>
</html>
<?php

$s1=$_POST['r1'];
$s2=$_POST['r2'];
$s3=$_POST['r3'];
$ch=$_POST[ 'ch'];
echo("<br>Frist String=".$s1);
echo("<br>Second String=".$s2);
echo("<br>Replace String=".$s3);
if(strlen($s1)>strlen($s2))
{
switch($ch)
{
case 1:$k=strpos($s1,$s2);
if($k==NULL)
echo("string not found starting pos");
else
echo("string found starting pos=".$k);
break;
case 2:$s4=str_replace($s2,$s3,$s1);
echo("replace string=".$s4);
break;
case 3:$s=preg_split("//",$s1);
foreach($s as $v)
echo($v);

break;
}
}
else
{
switch($ch)
{
case 1:$k=strpos($s2,$s1);
if($k==NULL)
echo("string not found ending pos");
else
echo("string found ending pos=".$k);
break;

case 2:$s4=str_replace($s1,$s3,$s2);
echo("repl=".$s4);
break;

case 3:
    echo("after splitting string");
    $s = preg_split('/\s+/', $s2);
    foreach ($s as $v) 
  {
        echo($v);
    }
    break;

}
}
?>