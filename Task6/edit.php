<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
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

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Get the product ID from the URL parameter
        $id = $_GET['id'];

        // Retrieve the product from the database
        $sql = "SELECT * FROM products WHERE name = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $name = $row["name"];
            $buying_price = $row["buying_price"];
            $selling_price = $row["selling_price"];
            $display = $row["display"];
        } else {
            echo "Product not found.";
            exit();
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the updated form data
        $name = $_POST['name'];
        $buying_price = $_POST['buying_price'];
        $selling_price = $_POST['selling_price'];
        $display = isset($_POST['display']) ? 1 : 0;

        // Update the product in the database
        $sql = "UPDATE products SET buying_price = '$buying_price', selling_price = '$selling_price', display = '$display' WHERE name = '$name'";

        if ($conn->query($sql) === TRUE) {
            echo "Product updated successfully.";
        } else {
            echo "Error updating product: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <fieldset>
            <legend>Edit Product</legend>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>" required><br><br>

            <label for="buying_price">Buying Price:</label>
            <input type="text" name="buying_price" id="buying_price" value="<?php echo $buying_price; ?>" required><br><br>

            <label for="selling_price">Selling Price:</label>
            <input type="text" name="selling_price" id="selling_price" value="<?php echo $selling_price; ?>" required><br><br>

            <label for="display">Display:</label>
            <input type="checkbox" name="display" id="display" <?php if ($display == 1) echo "checked"; ?>><br><br>

            <input type="submit" value="Save">
        </fieldset>
    </form>
</body>
</html>
