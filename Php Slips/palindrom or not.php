<html>
<form method="POST" action="palindrom or not.php">
    <br><br><br>
    Enter String: 
    <input type="text" name="t1"><br><br><br>
    <input type="submit" value="Check"><br>
</form>
</html>

<?php

    $s1 = $_POST["t1"];
    $rev = strrev($s1);
    if ($rev == $s1)
    {
        echo("<br> Palindrome String......");
    }
 else 
     {
        echo("<br> Not a Palindrome String......" );
    }

?>
