<?php 

$name= $_FILES['file'] ['name'];

/*
$type= $_FILES['file'] ['type'];
$size= $_FILES['file'] ['size'];
$tmp_name= $_FILES['file'] ['tmp_name'];
echo $name ."<br>" . $type."<br>". $size ."<br>" . $tmp_name;
*/

if(isset($_FILES['file'] ['name'])) {
	if (!empty($name)) {
		echo "Yes";
	}
	else{
		echo "NO";
	}
}


?>

<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file"> <br> <br>
	<input type="submit" name="submit" value="Submit">
</form>