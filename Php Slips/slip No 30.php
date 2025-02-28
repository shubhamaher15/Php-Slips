<html>
    <body>
    <form method="POST" action="slip No 30.php"><br><br><hr>
        <h3>Enter The Competition Name :
           <input type="text" name="t1" size="50">
            <input type="submit"><br><br>
        <hr>

 <?php
if(isset($_POST["t1"]))
{
 $name=$_POST["t1"];
 $con=mysqli_connect("localhost","root","");
 if($con==false)
 {
    die("Error");
 }
 mysqli_select_db($con,"cdj");
 $res=mysqli_query($con," select * from student,competition,sc WHERE student.stud_id=sc.stud_id AND competition.cno=sc.cno AND cname='$name' AND rank='1st' ");
echo("<table border='2'> ");
echo("<tr><th>stud_id</th>");
echo("<th>Name</th>");
echo("<th>Class</th>");
echo("<th>c_no</th>");
echo("<th>c_name</th>");
echo("<th>Type</th>");
echo("<th>Rank</th>");
echo("<th>Year</th>");
echo("</tr>");
while($row=mysqli_fetch_array($res))
{
    echo("<tr>");
    echo("<th>".$row['stud_id']."</th>");
    echo("<th>".$row['name']."</th>");
    echo("<th>".$row['class']."</th>");
    echo("<th>".$row['cno']."</th>");
    echo("<th>".$row['cname']."</th>");
    echo("<th>".$row['type']."</th>");
    echo("<th>".$row['rank']."</th>");
    echo("<th>".$row['year']."</th>");
    echo("</tr>");
}
echo("</table>");
 }
 ?>       
