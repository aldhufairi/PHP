
<?php
// Array, echo key and value in array, <br/> is html coe that make the words wretten in vertical way
$id100 = array(
"name" => "Fareed",
"age" => 30,
"country" => "Yemen",
"email" => "x@gmail.com",
"id" => 100
);
echo "<pre>";
echo"<h1>";
foreach($id100 as $key => $value){
    echo $key . " " . $value . "<br/>";
};
echo "</pre>";
echo"</h1>";

?>

