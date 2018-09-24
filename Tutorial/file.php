<?php 

	/*
	if (isset($_POST['name'])) {		// THIS IS THE APPEND THING
		$name= $_POST['name'];
		

		if (!empty($name)) {
			$handle= fopen('text.txt','a');
			fwrite($handle, $name."\n");
			fclose($handle);
		}
		else{
			echo "Please enter a Name";
		}
	}
	*/

	$handle= fopen('text.txt', "r");
	$datain= fread($handle, filesize('text.txt'));
	$names_array= explode(', ', $datain);
	foreach ($names_array as $name) {
		echo $name,"<br>";
	
}


	/*
	$handle= fopen('text.txt','w');
	fwrite($handle, 'Hello there this is the file content from the file you just made.'. "\n");
	fwrite($handle,'This is the content on second line');
	fclose($handle);

	/*
	$name= $_POST['name'];
	if (isset($name)) {
		$handle=fopen('text.txt','a');
		echo $handle;
	}
	*/



	/*
	$reading=file('text.txt');
	$count=count($reading);
	foreach ($reading as $value) {
		echo "$value ";
	}
	echo '<br>'.'This is the number of lines in the text file: '.$count;
	*/

	?>
	<!--
		<form action="file.php" method="post">
			<br>
			<input type="text" name="name" placeholder="Name">
			<input type="submit" name="submit" value="Submit">
		</form>
	-->