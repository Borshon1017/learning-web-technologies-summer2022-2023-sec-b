<form  method="post">
<fieldset>
    <legend>Gender</legend>
    <input type="radio" name="gender" id="male" value="male">
    <label for="male">Male</label>
    
    <input type="radio" name="gender" id="female" value="female">
    <label for="female">Female</label>
    
    <input type="radio" name="gender" id="other" value="other">
    <label for="other">Other</label>
    <br>
    <br>
    <input type="submit">
</fieldset>
</form>
<?php
if(isset ($_POST["submit"]))
{
    echo "you are" . $_POST ["gender"];
}

?>