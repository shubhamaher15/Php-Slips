<html>
<body><hr>
<form method="POST" action="26.php">
Enter Hospital name:
<input type="text" name="t1"><br>
<input type="submit">
</body>
<hr>

<?php
$con=mysqli_connect("localhost","root","");
if($con==false)
die("Can Not Connect ..");

$name=$_POST["t1"];
mysqli_select_db($con,"omdada");
$res=mysqli_query($con,"select * from hospital,doctor,dh WHERE hospital.hno=dh.hno AND doctor.dno=dh.dno AND hname='$name' ");

echo "<table border='1' >
<tr>
<th>Doctor no</th>
<th>Doctor name</th>
<th>Address</th>
<th>City</th>
<th>Area</th>
<th>Hospital No</th>
<th>Hospital Name</th>
<th>Hospital city</th>
</tr>";

while($row=mysqli_fetch_array($res))
{
echo("<tr>");
echo("<td>".$row['dno']."</td>");
echo("<td>".$row['dname']."</td>");
echo("<td>".$row['address']."</td>");
echo("<td>".$row['city']."</td>");
echo("<td>".$row['area']."</td>");
echo("<td>".$row['hno']."</td>");
echo("<td>".$row['hname']."</td>");
echo("<td>".$row['hcity']."</td>");
//echo("<td>".$row['dno']."</td>");
echo("</tr>");
}
  echo "</table>";
?>
 