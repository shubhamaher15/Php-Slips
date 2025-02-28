</head>
<form method="POST" Action="sum of digit1.php">
<body>
    Enter no:
    <input type="number" name="t1"><br>
    <input type="Submit" value="Calculate"><br>
</body>
<?PHP
$n=$_POST["t1"];
$sum=0;
while($n>0)
{
$d=$n%10;
$sum=$sum+$d;
$n=$n/10;
}
echo("sum of digit=".$sum);
?>
</html>