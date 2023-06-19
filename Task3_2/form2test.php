<?php
    $email = $_POST['email'];

    if(strlen($email) == 0) {
        echo 'Cannot be empty';
        return;
    }
    
    $checking1 = explode('@', $email);
    if(count($checking1) > 1){
        $checking2 = explode('.', $checking1[1]);
    }
    else {
        echo 'Not a valid email';
        return;
    }
    
    if(count($checking2) < 2 or count($checking2) > 2){
        echo 'Not a valid email';
        return;
    }

    echo "your email is " . $email;
?>

<form action="" method="post"></form>
<fieldset>
    
   <legend><p>Email</p></legend> 
    <input type="email" name="name"></input> <button id="hintButton" title="hint: sample@example.com"><b>i</b></button><br> <br>
    <hr>
    <input type="submit"></input>
</fieldset>
