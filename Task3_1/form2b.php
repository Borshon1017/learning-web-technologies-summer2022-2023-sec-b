<form action="form2a.php" method="post"></form>
<fieldset>
    
   <legend><p>Email</p></legend> 
    <input type="email" name="name"></input> <button id="hintButton" title="hint: sample@example.com"><b>i</b></button><br> <br>
    <hr>
    <input type="submit"></input>
</fieldset>
<?php
if(isset ($_POST["submit"]))
{
    echo "your email is {$_POST["name"]}";
}

?>