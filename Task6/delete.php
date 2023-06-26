<!DOCTYPE html>
<html>
<head>
    <title>Delete Product</title>
</head>
<body>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "product_db";

    
    $conn = new mysqli($servername, $username, $password, $dbname);



    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        $id = $_GET['id'];

        
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

        $id = $_POST['name'];

      
        $sql = "DELETE FROM products WHERE name = '$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Product deleted successfully.";
        } else {
            echo "Error deleting product: " . $conn->error;
        }
    }

  
    $conn->close();
    ?>

    <fieldset>
        <legend>Delete Product</legend>

        <label for="name">Name:</label>
        <?php echo isset($name) ? $name : ""; ?><br><br>

        <label for="buying_price">Buying Price:</label>
        <?php echo isset($buying_price) ? $buying_price : ""; ?><br><br>

        <label for="selling_price">Selling Price:</label>
        <?php echo isset($selling_price) ? $selling_price : ""; ?><br><br>

        <label for="display">Displayable:</label>
        <?php echo isset($display) ? ($display == 1 ? "Yes" : "No") : ""; ?><br><br>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="name" value="<?php echo isset($name) ? $name : ""; ?>">
            <input type="submit" value="Delete">
        </form>
    </fieldset>
</body>
</html>
