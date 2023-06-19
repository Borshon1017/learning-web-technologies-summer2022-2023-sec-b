
<form  method="post">
<fieldset>
<legend><p><b>NAME</b></p></legend>
<input type="text" name="name" ><br> <br>
<hr>
<input type="submit" name="submit">
</fieldset>
</form>
<?php
if(isset ($_POST["submit"]))
{
    echo "your name is {$_POST["name"]}";
}

?>