<?php
    if(isset($_POST['submit'])){
        $group = $_POST['group'];
        echo "Your Blood group is {$group}";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <form action="" method="post">
        Blood Group &nbsp;
        <select name="group" id="" >
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
        </select>
        <hr>
        <input type="submit" value="submit" name="submit" id="">
    </form>
</body>
</html>