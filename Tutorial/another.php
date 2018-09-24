<?php

/* 

############### THIS IS THE INFORMATON FOR 
FORM INPUTTING ################
$user_name= $_POST['user-name'];
echo "Your username is ". $user_name;
$password= $_POST['password'];
$pass_again= $_POST['password_again'];
if ($password==$pass_again) {
	echo "Your password is ". $password;
}

if( isset($_POST['gender1']));{
echo "male";
}

if(isset($_POST['gender2']));
{echo "female";}


$information= $_POST['info'];
echo "THis is your information <br>". $information;

*/  ######## ENDS ############ 

session_start();
echo $_SESSION['name'];
?>