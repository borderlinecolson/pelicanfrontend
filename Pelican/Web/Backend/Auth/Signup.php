<?php
$AuthFile="../../../../Logins.encrypted"


#Check if email is valid
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
#---



#Check if username is taken
foreach(file($AuthFile) as $line) {
    echo $line. "\n"; #Check if first part of string is taken alredy
    if($line != $_POST["username"]){
        return true;
    }
    else{
        echo "Username Taken";
        return false;
        break;
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