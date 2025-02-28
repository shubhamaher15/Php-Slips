<html>
<head>
    <title>Student Registration Course</title>
</head>
<body align="center">
    <h1 align="center">Course Registration of Learner in an institute</h1>
    <hr>
    <form method="POST" action="slip No 17.php">
        <h3>Enter Student Name:<br>
    <input type="text" name="t1" id="name" size="25" required pattern="[a -z]"><br><br>

        Enter Course Name:<br>
        <input type="text" name="t2" size="25"  required pattern="[1-10]"><br><br>

        Enter Mobile Number:<br>
        <input type="text" name="t3"  required><br><br>

        <input type="Reset" value="Clear">&nbsp;&nbsp;&nbsp;<input type="Submit" value="Registration">
    </form>
    <hr>

    <?php
    error_reporting(0);
        $name = $_POST["t1"];
        $course = $_POST["t2"];
        $mno = $_POST["t3"];
      if (is_string($name) && filter_var($mno, FILTER_VALIDATE_INT) && strlen($mno) === 10)
{
        echo("<h2>Student Name: " . $name . "</h2>");
        echo("<h2>Student Course Name: " . $course . "</h2>");
        echo("<h2>Student Phone Number: " . $mno . "</h2>");
        $r='@!r%-'.rand(100,1000);
        echo("<h2>Student Registration No :" . $r. "</h2>");
}
    ?>
</body>
</html>
