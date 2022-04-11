<?php
$AuthFile="../../../../Logins.encrypted"
AllowedUsernameChracters=["q","w","e",'r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m','1','2','3','4','5','6','7','8','9','0']


$email = test_input($_POST["email"]);

$username=preg_replace("/[^A-Za-z0-9 ]/", '', $_POST["username"]);

$password=$_POST["password"];

#Check if email is valid

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
#---



#Check if username is allowed



foreach(file($AuthFile) as $line) {
    $username=$line.explode(":")
    if(strtolower($username[0])==strtolower($_POST["username"])){

    }
 } 
#---

#hash details
$hashedpassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
#---

#Put encrypted details into Logins.encrypted
$current = file_get_contents($AuthFile);
$current .= $email.":".$_POST["username"].":".$hashedpassword."\n";
file_put_contents($AuthFile, $current);
#---

?>