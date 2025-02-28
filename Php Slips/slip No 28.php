<html>
    <body>
        <form method="POST" action="slip No 28.php"><hr>
            <h3>Enter The Teacher name :
                <input type="text" name="t1" size="50">
                <input type="submit">
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
$res=mysqli_query($con,"select * from student1,teacher,st WHERE student1.sno=st.sno AND teacher.tno=st.tno AND t_name='$name' ");
echo("<table border='2'>");
echo("<tr><th>sno</th>");
echo("<th>s_name</th>");
echo("<th>s_class</th>");
echo("<th>Address</th>");
echo("<th>Tno</th>");
echo("<th>T_name</th>");
echo("<th>Qualification</th>");
echo("<th>Experiences</th>");
echo("<th>Subject</th>");
echo("</tr>");
while($row=mysqli_fetch_array($res))
{
    echo("<tr>");
    echo("<th>".$row['sno']."</th>");
    echo("<th>".$row['name']."</th>");
    echo("<th>".$row['sclass']."</th>");
    echo("<th>".$row['addr']."</th>");
    echo("<th>".$row['tno']."</th>");
    echo("<th>".$row['t_name']."</th>");
    echo("<th>".$row['qualification']."</th>");
    echo("<th>".$row['exp']."</th>");
    echo("<th>".$row['subject']."</th>");
}
echo("</table>");
}
?>                
