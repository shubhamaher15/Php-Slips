<html>
        <head>
        </head>
    <form method="POST" action="slip No 6.php">
        Enter The 1 String :
        <input type="text" name="t1" size="50"><br><br>
        Enter The 2 String :
        <input type="text" name="t2" size="50"><br><br>
        Enter The Position To Reversed :
        <input type="text" name="t3" size="50"><br>
        <input type="radio" name="r1" value="1">Comapre The  Two string<br><br>
        <input type="radio" name="r1" value="2">Append Two String<br><br>
        <input type="radio" name="r1" value="3">First String Reverece<br><br>
        <input type="submit"> 
</body>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$ch=$_POST["r1"];
switch($ch)
{
case 1:$c=strcmp($s1,$s2);
        if($c==0)
        print("<br>This String Is Equal...");
        else
        print("<br>This String Is  NOT Equal...");
        break;

case 2:$d=$s1.$s2;
       echo("<br><br>After Append Both String : ".$d);
       break;    

case 3:$pos = $s3;
       $str4 = strrev(substr($s1, $pos));
      echo "<br>After reverse=$str4.<br>";
       break;
       
}
?>