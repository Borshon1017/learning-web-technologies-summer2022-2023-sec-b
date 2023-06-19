<form action="form2a.php" method="post"></form>
<fieldset>
    
   <legend><p>Email</p></legend> 
    <input type="email" name="name" value="<?php
if(isset ($_POST["submit"]))
{
    echo "{$_POST["name"]}";
}

?>"> <button id="hintButton" title="hint: sample@example.com"><b>i</b></button><br> <br>
    <hr>
    <input type="submit"></input>
</fieldset>
