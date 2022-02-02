<form method="get"> 
email<input type="email" name="email"/>
password<input type="password" name="password"/>
<button type ="submit" name="submit">submit</button>

</form>
<! -- and if u want to send articals or normail information use "get" 
//if u want use secret information use "post" -->

<?php
if(isset($_GET['submit'])){

    if($_GET['email'] == "x@gmail.com"
    &&
    $_GET['password'] == "1234"){

    echo " Your Email is: " . $_GET['email'] . "<br/>";
    echo " Your Password is: " . $_GET['password'];
    //that will print it in same page

    }else{
        echo "email or password error";
    }
}

//if (isset($_GET['submit'])){ do anything } <<means if press submit button
//$_GET['name'] << this is how to use GET funtion 

// we did the email or password should be same as we wrote it in there

?>
