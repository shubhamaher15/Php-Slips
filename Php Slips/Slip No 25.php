<head>
    <title>Employee Information</title>
</head>
<body align="center">
    <br><br><br>
    <form method="POST" action="">
        Enter Employee Number:<br>
        <input type="text" name="t1"><br><br>
        <input type="submit" value="Check"><br><br>
    </form>

    <?php
    $con = mysql_connect("localhost", "root", "");
    if (!$con)
 {
        die("Error: " . mysql_error());
    } else {
        echo "<br>Success...";
    }

    $no = isset($_POST["t1"]) ? $_POST["t1"] : '';

    mysql_select_db("use omdada");

    $query = "SELECT * FROM emp WHERE emp_no = " . $no;
    $result = mysql_query($query);

    if ($result) {
        while ($row = mysql_fetch_array($result)) 
   {
            echo "<br>Emp Name: " . $row[0];
            echo "<br>Emp Address: " . $row[1];
            echo "<br>Emp Salary: " . $row[2];
            echo "<br>Emp Phone No: " . $row[3];
        }
    } else {
        echo "<br>No records found for employee number " . $no;
    }
    mysql_close($con);
    ?>
</body>
</html>
