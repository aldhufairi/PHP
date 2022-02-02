<form method="get"> 
red<input type="radio" name="color" value="red"/>
green<input type="radio" name="color" value="green"/>
orange<input type="radio" name="color" value="orange"/>
blue<input type="radio" name="color" value="blue"/>
pink<input type="radio" name="color" value="pink"/>
submit<input type="submit" name="submit"/>

</form>
<! --  radio is choose funtion in HTML language... should be same name (color)  -->

<?php
if(isset($_GET['submit'])){
    echo "<style> body{background:" . 
        $_GET['color'] . 
    ";}</style>";
}
?>

