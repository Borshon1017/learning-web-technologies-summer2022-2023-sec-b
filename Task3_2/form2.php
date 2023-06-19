<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
    <?php
    $email = '';
    $error = '';

   
        $email = $_POST['email'];

     
        if (empty($email)) {
            $error = 'Email cannot be empty.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Invalid email address.';
        }
   
    ?>

    <form action="" method="post">
        <fieldset>
            <legend><b>Email</b></legend>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            <button id="hintButton" title="hint: sample@example.com"><b>i</b></button>
            <br> <br>
            <?php if ($error): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <hr>
            <input type="submit" name="submit">
        </fieldset>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (!$error) {
            echo "Your email is " . $_POST["email"];
        }
    }
    ?>
</body>
</html>
