<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
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



    // Get the products from the database with "display" checkbox checked
    $sql = "SELECT name, buying_price, selling_price FROM products WHERE display = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1>
                <tr>
                    <th>Name</th>
                    <th>Profit</th>
                    <th>Manage</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $buying_price = $row["buying_price"];
            $selling_price = $row["selling_price"];
            $profit = $selling_price - $buying_price;

            echo "<tr>
                    <td>$name</td>
                    <td>$profit</td>
                    <td>
                        <a href=\"edit.php?id=$name\">Edit</a> |
                        <a href=\"delete.php?id=$name\">Delete</a>
                    </td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No products found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
