<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
    <?php
    $name = '';
    $error = '';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        if (empty($name)) {
            $error = 'Name cannot be empty.';
        } else {
            $words = explode(' ', $name);
            if (count($words) < 2) {
                $error = 'Name must contain at least two words.';
            } elseif (!ctype_alpha($name[0])) {
                $error = 'Name must start with a letter.';
            } elseif (!ctype_alnum(str_replace(array(' ', '.', '-'), '', $name))) {
                $error = 'Name can only contain letters (a-z, A-Z), period, and dash.';
            }


            
        }
    }
    ?>

    <form action="" method="post">
        <fieldset>
            <legend><b>NAME</b></legend>
            <input type="text" name="name" > <br> <br>
            <?php if ($error): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>
</body>
</html>
