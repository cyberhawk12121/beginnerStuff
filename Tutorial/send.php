<html>
<head> 
<title> This is form tutorial </title>
</head>
<body>
	<h1>THANK YOU !! </h1>
	<?php
		


		/*	$yes= $_POST['checkbox1'];           (This code is for wrong checkbox data retrieval)
			$no= $_POST['checkbox2'];
			This code is partially wrong. Don't worry that's what most do in beginning 
		*/
		
		


		/* if(isset($_POST['checkbox1'])){
		echo $yes=$_POST['checkbox1'];
		}	
		 
		else
		{
			echo $no=$_POST['checkbox2'];
		} */

		


		/*
		echo "You selected: <br/>"; (NOTE: This is the different way of retrieving data by array formation. In this method I made an array called game[] and stored 								................certain values in it, And stored it in function $food then using foreach I printed out the checked boxes. )
		$food= $_POST['game'];
		foreach ($food as $key=>$value) {
			# code...
			echo $value. '<br/>';
		}
		*/
		

		/* ##### This was for Radio Button #####
		
		$yes= $_POST['game'];
		echo " you said: ". $yes. '<br/>' ;
		$no= $_POST['game'];
		echo "you said: ". $no ;
		*/
		

		/*

		$game= $_POST['game'];
		foreach ($game as $key => $value) {
			# code...
			echo $value ."</br> " ;
		}
		
		*/

	$username= $_POST['username'];
	$password= $_POST['password'];
	$pass_again=$_POST['password_again'];



	?>
</body>	
</html>