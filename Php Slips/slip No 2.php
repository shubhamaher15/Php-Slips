Write a PHP script for the following: Design a form to accept two strings from the user. 
Find the first occurrence and the last occurrence of the small string in the large string. 
Also count the total number of occurrences of small string in the large string. 
Provide a text box to accept a string, which will replace the small string in the large 
string. (Use built-in functions)*/

<html>
    <title>String Manipulation</title>
<body align="center">
    <h1>String Manipulation</h1>
    
    <form method="post" action="slip No 2.php">
        Enter A Large String :<br>
        <input type="text" name="t1" required><br><br>
        
        Enter Small String :<br>
        <input type="text" name="t2" required><br><br>
      
        Enter A Replace string :<br>
        <input type="text" name="t3"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    
    <?php
   if($_SERVER["REQUEST_METHOD"]==="POST") 
  {
        $s1 = $_POST["t1"];
        $s2 = $_POST["t2"];
        $s3 = $_POST["t3"];

        $s4 = strpos($s1, $s2);
        $s5 = strrpos($s1, $s2);
        $s6 = substr_count($s1, $s2);
        $s7 = str_replace($s2, $s3, $s1);

    echo("<h2>Results: ");
    echo("<br>First Occurrence Position: ".$s4);
    echo("<br>Last Occurrence Position:".$s5);
    echo("<br>Total Occurrences: ".$s6);
    echo("<br>Replace String: ".$s7);
    }
    ?>
</body>
</html>
