<!DOCTYPE html>
<html>
<head>
    <title>Product Information</title>
</head>
<body>
    <h1>Product Information</h1>
    <form method="POST" action="generate_bill.php">
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" required><br>

        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity" required><br>

        <label for="rate">Rate:</label>
        <input type="text" id="rate" name="rate" required><br>

        <!-- Hidden fields to carry forward customer info -->
        <input type="hidden" name="customer_name" value="<?php echo $_POST['customer_name']; ?>">
        <input type="hidden" name="customer_address" value="<?php echo $_POST['customer_address']; ?>">
        <input type="hidden" name="phone_number" value="<?php echo $_POST['phone_number']; ?>">

        <input type="submit" value="Generate Bill">
    </form>
</body>
</html>
