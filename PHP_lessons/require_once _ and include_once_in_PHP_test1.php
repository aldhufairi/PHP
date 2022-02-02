
<?php
//require_once("name.filetype"); or include_once("name.filetype");
// will read that script once 
//so if u call script two times by mistake that function will help u to ignore calling  same script again
require("test1.php");
require_once("test1.php");
echo $x;
?>

