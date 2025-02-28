<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <form method="POST" action="24.php">
        <hr><br>
        Enter username:
        <input type="text" name="t1" size="25"><br><br>
        Enter Password:
        <input type="password" name="t2" size="25"><br><br>
        <input type="submit" value="Check">
        <hr>
    </form>
   
<?php
session_start();
if(isset($_POST["t1"])&&isset($_POST["t2"]))
{
$u=$_POST["t1"];
$p=$_POST["t2"];
if(!isset($_SESSION["com"]))
{
    $_SESSION["com"]=0;
}
 $_SESSION["com"] ++;
if($_SESSION["com"]>3)
die("<h3>Three Chance Complete....");
else
{
   if($u=="com" && $p=="456")
    header("location: http://unipune.ac.in");
else
echo("<h3> Invalid Username AND Password...");
}
}

?>



