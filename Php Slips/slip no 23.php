<html>
<head>
    <title>Customer Information</title>
</head>
<body>
    <h1>Customer Information</h1>
    <form method="POST" action="product_info.php">
        <label for="name">Customer Name:</label>
        <input type="text" id="name" name="customer_name" required><br>

        <label for="address">Customer Address:</label>
        <input type="text" id="address" name="customer_address" required><br>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone_number" required><br>

        <input type="submit" value="Next (Enter Product Information)">
    </form>
</body>
</html>
