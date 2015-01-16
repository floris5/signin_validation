<?php

  if ($_POST['submit']) {

if (!$_POST['email']) $error.="</br>Please enter your email";

else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="</br>Please enter a valid email"; 


 if (!$_POST['password']) $error.="</br>Please enter your password";
 else { 

 if (strlen($_POST['password'])<8) $error.="</br>Please enter at least 8 characters";
 if(!preg_match('/[A-Z]/', $_POST['password'])) $error.= "</br>Please include min 1 capital letter";

 }

if ($error) echo "There were error(s) in your input:".$error;

 }

?>

<form method="post">

 <input type="email" name="email" id="email" />

 <input type="password" name="password" />

 <input type="submit" name="submit" value="Sign Up" />

</form>
