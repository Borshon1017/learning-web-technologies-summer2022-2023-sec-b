<!DOCTYPE html>
<html>
<head>
    <title>Display Input</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       

        if (isset($_POST['SSC'])) {
            echo '<p>SSC</p>';
        }
        if (isset($_POST['HSC'])) {
            echo '<p>HSC</p>';
        }
        if (isset($_POST['BR'])) {
            echo '<p>BR</p>';
        }
        if (isset($_POST['MSc'])) {
            echo '<p>MSc</p>';
        }

        
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="SSC" id="SSC">SSC
            <input type="checkbox" name="HSC" id="HSC">HSC
            <input type="checkbox" name="BR" id="BR">BR
            <input type="checkbox" name="MSc" id="MSc">MSc
            <br>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>
