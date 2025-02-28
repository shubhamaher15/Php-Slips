<html>
<title>Electricity Bill Calculator</title>
<body >
<h1>Electricity Bill Calculator</h1><hr>
<form method="POST" action="slip No 16.php">

<h3>Enter Customer Name:
<input type="text" name="t1" size="15"><br>

<h3>Enter Customer Mobail No:
<input type="number" name="t2" size="15"><br>

<h3>Enter Use Customer Consumed:
<input type="number" name="t3" size="15"><br><br>

<input type="submit" value=" Calculate ">
<input type="Reset" value=" Clear">

<?php
$name=$_POST['t1'];
$mno=$_POST['t2'];
$unit=$_POST['t3'];
$fixed_charge=150;

if($unit<=50)
$rate=3.50;

elseif($unit<=100)
$rate=4.00;

elseif($unit<=100)
$rate=5.20;

elseif($unit<=250)
$rate=6.50;

echo("<hr>");
echo("<h1>Electricity Bill Details</h1>");
echo("<hr>");

echo("<h3>Customer Name :".$name ."</h3>");
echo("<h3>Customer Mobail Number:".$mno ."</h3>");
echo("<h3>Customer Use Unit:".$unit ."</h3>");
echo("<hr>");

$bill = $unit* $rate;
$total = $bill + $fixed_charge;

echo("<h1>Total Rate:".$bill ."</h1>");
echo("<h1>Total Bill :".$total ."</h1>");
?>

