<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <?php
    // Database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_db";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = $_POST['name'];
        $buying_price = $_POST['buying_price'];
        $selling_price = $_POST['selling_price'];
        $display = isset($_POST['display']) ? 1 : 0; // Checkbox value

        // SQL query to insert the product into the "products" table
        $sql = "INSERT INTO products (name, buying_price, selling_price, display) VALUES ('$name', '$buying_price', '$selling_price', '$display')";

        if ($conn->query($sql) === TRUE) {
            echo "Product saved successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>ADD PRODUCT</legend>
            
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br><br>
            
            <label for="buying_price">Buying Price:</label>
            <input type="text" name="buying_price" id="buying_price" required><br><br>
            
            <label for="selling_price">Selling Price:</label>
            <input type="text" name="selling_price" id="selling_price" required><br><br>
            
            <label for="display">Display:</label>
            <input type="checkbox" name="display" id="display"><br><br>
            
            <input type="submit" value="Save">
        </fieldset>
    </form>
</body>
</html>
