<html>
<body align="center">
<head>
<Title>Check Email Id</title>
<form method="post" action="slip No 14.php"><hr>
<h1>Check Email Id Valid Or Not</h1>
<hr>
<h2>Enter Email Id:<br>
<input type="text" name="e1" size="25" placeholder="             Enter Email Id   "><br>
<input type="reset" value=" Back ">&nbsp;&nbsp;<input type="Submit" value="  Check  ">
<hr>
</html>
</body>
</head>

<?php
if($_SERVER["REQUEST_METHOD"]==="POST") 
{
$e = $_POST["e1"];
echo("<h2>Email Id: " . $e . "</h2>");
if (filter_var($e, FILTER_VALIDATE_EMAIL))
{
    echo("<h2>This Email-Id is valid");
}
 else
{
    echo("<h2>This Email-Id is invalid");
}
}
?>
