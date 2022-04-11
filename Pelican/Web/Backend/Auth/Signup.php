<?php

$UserCode=00000

$AuthFile="../../../../Logins.encrypted" #Where passwords are stored and HASHED

$email = test_input($_POST["email"]); #The email input from the post request

$username=preg_replace("/[^A-Za-z0-9 ]/", '', $_POST["username"]); #the username with non alphabet characters removed

#Password
$password=$_POST["password"]; #the password input before being hashed

$hashedpassword = password_hash($password, PASSWORD_DEFAULT); #the hashed version of the password input
#---

#Check if email is valid

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  return $emailErr;
  break;
}
#---



#Check if username is allowed
foreach(file($AuthFile) as $line) {
    $checkedusername=$line.explode(":")[0]
    if(strtolower($checkedusername)==strtolower($username)){
        $UserCode+=1;
    }
 } 
#---


#Put encrypted details into Logins.encrypted
$current = file_get_contents($AuthFile);
$current .= $username.":".":".$UserCode.":".$email.":".$hashedpassword."\n";
file_put_contents($AuthFile, $current);
#---

?>