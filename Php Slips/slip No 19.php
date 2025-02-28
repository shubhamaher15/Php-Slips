<?php
session_start();

if (isset($_SESSION["count"])) 
    $_SESSION["count"]++;
else 
{
    $_SESSION["count"] = 1; 
    echo "First Time visit...";
}

echo "<h2>Visit Count: " . $_SESSION["count"] . "</h2>";
?>
