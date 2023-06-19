<form action="form3a.php" method="post">
<fieldset>
    <legend><b>Date of Birth</b></legend>
    &nbsp; &nbsp;  dd &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;      mm  &nbsp; &nbsp;    yyyy
    <br>
    <input type="text" size="1" name="d" value="<?php
if(isset ($_POST["submit"]))
{
    echo "{$_POST["n"]}";
}

?>"> / <input type="text" size="1" name="m" value="<?php
if(isset ($_POST["submit"]))
{
    echo "{$_POST["n"]}";
}

?>"> /<input type="text" size="1" name="y" value="<?php
if(isset ($_POST["submit"]))
{
    echo "{$_POST["n"]}";
}

?>"> 
    <hr>

  
    <input type="submit">
</fieldset>
</form>