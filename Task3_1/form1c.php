
<form  method="post">
<fieldset>
<legend><p><b>NAME</b></p></legend>
<input type="text" name="name" value="<?php
if(isset ($_POST["submit"]))
{
    echo "your name is {$_POST["name"]}";
}

?>">


<br> <br>
<hr>
<input type="submit" name="submit">
</fieldset>
</form>

