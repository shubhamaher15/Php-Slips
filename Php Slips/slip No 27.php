<html>
<body align="center">
<form method="POST" action="27.php"><hr><br>
Enter Project Name :
<input type="text" name="t1"><br><br>
<input type="submit"><hr>
<br><br><br><br>
<body align="center">
<?php
if (isset($_POST["t1"]))
{
$con=mysqli_connect("localhost","root","");
if($con==false)
die("Error Connectivity...");
$name=$_POST["t1"];
mysqli_select_db($con,"omdada");
$res=mysqli_query($con," select * from project,emp,pe WHERE project.pno=pe.pno AND emp.eno=pe.eno AND pname='$name' ");

echo("<table border='1'>");
echo("<tr>");
echo("<th>pno</th>");
echo("<th>Pname</th>");
echo("<th>Ptype</th>");
echo("<th>Duration</th>");
echo("<th>Eno</th>");
echo("<th>Ename</th>");
echo("<th>Qualification</th>");
echo("<th>join Date</th>");
echo("<th>No Of Hourse Work</th>");
echo("</tr>");

while($row=mysqli_fetch_array($res))
{
echo("<tr>");
echo("<td>".$row['pno']."</td>");
echo("<td>".$row['pname']."</td>");
echo("<td>".$row['ptype']."</td>");
echo("<td>".$row['duration']."</td>");
echo("<td>".$row['eno']."</td>");
echo("<td>".$row['ename']."</td>");
echo("<td>".$row['qua']."</td>");
echo("<td>".$row['join_date']."</td>");
echo("<td>".$row['no_of_hours']."</td>"); 
echo("</tr>");
}
}
?>
</body>







