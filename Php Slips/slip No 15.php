<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="15.php">
      <h1> Grocery Items </h1>
      
      Product: Suger (40 Rs/Kg)
      <input type="checkbox" name="c1"> Select Product
      Enter Quantity: <input type="text" name="t1"><br>
      
      Product: Oil (140 Rs/Kg)
      <input type="checkbox" name="c2"> Select Product
      Enter Quantity: <input type="text" name="t2"><br>

      Product: Camel (100 Rs/Kg)
      <input type="checkbox" name="c3"> Select Product
      Enter Quantity: <input type="text" name="t3"><br>
      
      <input type="submit" value="Bill">
    </form>
  </body>
</html>

<?php
if (isset($_POST["c1"])) {
    $q1 = $_POST["t1"];
    $st1 = $q1 * 40;
}

if (isset($_POST["c2"])) {
    $q2 = $_POST["t2"];
    $st2 = $q2 * 140;
}

if (isset($_POST["c3"])) {
    $q3 = $_POST["t3"];
    $st3 = $q3 * 100;
}

$total_bill = 0;

echo("<h1>Mauli Shop Bill</h1> <hr>");
echo("<table border=1>");
echo("<tr> <th> Product Name <th> Quantity <th> Rate <th> Total </tr>");

if (isset($q1))
 {
    echo("<tr><td>Sugar");
    echo("<td>" . $q1);
    echo("<td>40");
    echo("<td>" . $st1);
    $total_bill += $st1;
}

if (isset($q2)) {
    echo("<tr><td>Oil");
    echo("<td>" . $q2);
    echo("<td>140");
    echo("<td>" . $st2);
    $total_bill += $st2;
}

if (isset($q3)) {
    echo("<tr><td>Camel");
    echo("<td>" . $q3);
    echo("<td>100");
    echo("<td>" . $st3);
    $total_bill += $st3;
}

echo("</table>");
echo("Total Bill = " . $total_bill);
?>
