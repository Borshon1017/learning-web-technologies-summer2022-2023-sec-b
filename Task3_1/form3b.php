<form method="post">
<fieldset>
    <legend><b>Date of Birth</b>></legend>
    &nbsp; &nbsp;  dd &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;      mm  &nbsp; &nbsp;    yyyy
    <br>
    <input type="text" size="1"> / <input type="text" size="1"> /<input type="text" size="1"> 
    <hr>

  
    <input type="submit">
</fieldset>
<form>
    <?php
if(isset ($_POST["submit"]))
{
    
echo "Date: ".$_POST ["d"] . "&nbsp Month:".$_POST ["m"] ."&nbsp Year:".$_POST ["y"];


}

?>