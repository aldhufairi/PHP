<form method="post"> 
calculate age in days and hours<input type="number" name="n"/>
<button type ="submit" name="submit">submit</button>

</form>
<! --  -->

<?php
if(isset($_POST['submit'])){
    echo "Your age in days: " . $_POST['n'] * 365 . " days <br/>";
    echo "Your age in hours: " . $_POST['n'] * 365  * 24 . " hours";
}

?>
