<!DOCTYPE html>
<html>
<body align="center">
<title>Product Information</title>
<form method="POST" action="create_bill.php">
  <h1>Product Information</h1>
  <hr>
  <h3>Enter Product Name:<br>
    <input type="text" name="t4" size="25"><br><br>
    Enter Product Quantity:<br>
    <input type="text" name="t5" size="25"><br><br>
    Enter Product Rate:<br>
    <input type="text" name="t6" size="25"><br><br>
    <input type="hidden" name="t1" value="<?php echo $_POST['t1']; ?>">
    <input type="hidden" name="t2" value="<?php echo $_POST['t2']; ?>">
    <input type="hidden" name="t3" value="<?php echo $_POST['t3']; ?>">
    <input type="Reset" value="Back">
    <input type="submit" value="Next">
    <hr>
  </form>
</body>
</html>
