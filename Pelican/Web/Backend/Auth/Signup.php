<?php
$AuthFile="../../../../Logins.encrypted"
AllowedUsernameChracters=["q","w","e",'r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m','1','2','3','4','5','6','7','8','9','0']


$email = test_input($_POST["email"]);

$username=preg_replace("/[^A-Za-z0-9 ]/", '', $_POST["username"]);

#Password
$password=$_POST["password"];

$hashedpassword = password_hash($password, PASSWORD_DEFAULT);
#---

#Check if email is valid

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
#---



#Check if username is allowed
foreach(file($AuthFile) as $line) {
    $checkedusername=$line.explode(":")[0]
    if(strtolower($checkedusername)==strtolower($username)){

    }
 } 
#---


#Put encrypted details into Logins.encrypted
$current = file_get_contents($AuthFile);
$current .= $email.":".$username.":".$hashedpassword."\n";
file_put_contents($AuthFile, $current);
#---

?>