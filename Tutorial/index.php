<?php



#### include 'header.inc.php'; ####
/*
if (isset($_POST['submit'])) {
	# code...
	echo "process 1";
}
*/

########### This part down shows a button sign which is included from header.inc.php and when you press it the header function redirects the user to the page mentioned in $redirect_page ############

/*	######### Header ##########
$redirect_page= 'https://google.com';
$redirect=true;
if (isset($_POST['submit'])) {
	header('Location:'. $redirect_page); 
}
*/

/* ######### IP address #########
$ip= $_SERVER['REMOTE_ADDR'];
echo $ip;
*/

session_start();
$_SESSION['name']='Sameer';

?>

<!-- ################# THIS IS THE FORM 
	##################

<section class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="page-header"><h3> Sign-up </h3></div>
			<form action="another.php" method="post">
				Username: <input type="email" name="user-name" placeholder="Username" style="color: black;"><br><br>
				Password: <input type="password" name="password" placeholder="password" style="color: black;"><br><br>
				Password-Again: <input type="password" name="password_again" placeholder="password" style="color: black;"><br><br>
				Gender:<br/><br>  
				Male <input style="width: 40px;" type="radio" name="gender1">  
				Female <input style="width: 40px;" type="radio" name="gender2">
				<br><br><br>
				Self Description <br><br>
				<textarea name="info" style="color: black;"></textarea>
				<br><br>
				<input type="submit" class="btn btn-danger" name="button" value="Register" style="font-size: 17px;">
			</form>
		</div>
	</div>
</section>

########### END ########### -->
