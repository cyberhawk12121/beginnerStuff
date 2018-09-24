<!--
<?php 

$sql_host= "localhost";
$sql_user= "root";
$sql_pass= "Sameer87500";
$sql_db="quizzer";
$con= new mysqli($sql_host, $sql_user, $sql_pass, $sql_db); // Instead of new mysqli() we can use mysqli_connect too. 

$query= "SELECT * FROM questions ORDER BY question_number";
$quiz= mysqli_query($con, $query);
while ($row=mysqli_fetch_assoc($quiz)) {
	echo $row['text'];
}


?> 
-->


<!--
<?php 

$sql_host= "localhost";
$sql_user= "root";
$sql_pass= "Sameer87500";
$sql_db="quizzer";
$con= new mysqli ($sql_host, $sql_user, $sql_pass, $sql_db); // Instead of new mysqli() we can use mysqli_connect too. 

$query= "SELECT * FROM questions ORDER BY question_number";
$quiz= mysqli_query($con, $query);
while ($row=mysqli_fetch_assoc($quiz)) {
	foreach ($row as $key => $value) {
		echo $key. "<br>". $value;
	}
	}


?>

-->

<!--
<?php 


$sql_host= "localhost";
$sql_user= "root";
$sql_pass= "Sameer87500";
$sql_db="quizzer";
$con= new mysqli($sql_host, $sql_user, $sql_pass, $sql_db);

$query=(" SELECT * FROM questions where question_number='1' ");
$query_run= mysqli_query($con, $query);
while ($row=mysqli_fetch_assoc($query_run)){ 
	echo $row['text'];
}

?>
-->

<!--
<?php 

$sql_host= "localhost";
$sql_user= "root";
$sql_pass= "Sameer87500";
$sql_db="quizzer";
$con= new mysqli($sql_host, $sql_user, $sql_pass, $sql_db);
$query="SELECT text from questions";
$result=  $con->query($query);
while ($row= $result->fetch_assoc()) {
	//echo $row['text'];
	foreach ($row as $value) {
		echo $value. '<br>';
	}
}

?>
-->

<!--
<?php 

$sql_host= "localhost";
$sql_user= "root";
$sql_pass= "Sameer87500";
$sql_db="quizzer";
$con= mysqli_connect($sql_host, $sql_user, $sql_pass, $sql_db);
$query="SELECT text from questions";
$connect= mysqli_query($con, $query);
while ($row=mysqli_fetch_assoc($connect)) {
	echo $row['text'];
}

?>
-->

<?php 


$sql_host= "localhost";
$sql_user= "root";
$sql_pass= "Sameer87500";
$sql_db="sample";
$con= new mysqli($sql_host, $sql_user, $sql_pass, $sql_db);
$query= "SELECT * from sample_table";
$query_run= mysqli_query($con, $query);
//while ($row= mysqli_fetch_assoc($query_run) ) {
//	echo $row['subject'] . '<br>'. $row['marks'] .'<br>' . $row['name'];


?>

<head>
 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	


	<div class="container">
	<h1 class="page-header">This table is connected to DB</h1>
	<table class="table table-striped table-bordered table-hover">
	
	<tr  class="primary">
		<td>Serial</td>
		<td>Name</td>
		<td>Subject</td>
		<td>Marks</td>
	</tr>

	<tr>
		<td>
		
		<?php 
			// $query= "SELECT * FROM sample_table where id='1'";
			// $query_run= mysqli_query($con, $query);
			// while($row=mysqli_fetch_assoc($query_run)){
			 $row= mysqli_fetch_assoc($query_run);		 ############# THE SERIAL NUMBER "1" IS TAKEN FROM DATABSE ID. ##############
			 echo $row['id']; 
			 ?>	
		
		</td>
		<td>
			<?php $query2= "SELECT name FROM sample_table Where id='1' "; ########## THE NAME "SAMEER" TAKEN FROM DATABASE ########## 
				$query_run2= mysqli_query($con, $query2);
				$row= mysqli_fetch_assoc($query_run2);
				echo $row['name']; 		
			?>
		 	
		 </td>
		<td>
		
		<?php 
			$query5= "SELECT subject FROM sample_table WHERE id='1' ";
			$query_run5= mysqli_query($con, $query5);
			$row= mysqli_fetch_assoc($query_run5);
			echo $row['subject'];
		?>
			
		</td>
		<td>
			<?php 
			
			$query6= "SELECT marks FROM sample_table where id='1' ";
			$query_run6= mysqli_query($con, $query6);
			$row= mysqli_fetch_assoc($query_run6);
			echo $row['marks'];

			?>
				
		</td>
	</tr>

	<tr>
		<td> 

			<?php  
				$query1= "SELECT id from sample_table";	############ THE SERIAL NUMBER '2' IS TAKEN FROM THE DATABASE ID. ################
				$row= mysqli_fetch_assoc($query_run);
				echo $row['id'];
			?>
			
		</td>
		<td>

		<?php 
			$query3="SELECT name FROM sample_table WHERE id='2' ";
			$query_run3= mysqli_query($con, $query3);
			$row= mysqli_fetch_assoc($query_run3);  
			echo $row['name'];
		?>
		</td>
		<td>
			<?php 
				$query4= "SELECT subject FROM sample_table WHERE id='2' "; #########  THIS SHOWS THE SUBJECT NAME "MATHEMATICS" ##########
				$query_run4= mysqli_query($con, $query4);
				$row= mysqli_fetch_assoc($query_run4);
				echo $row['subject']; 
			?>
		</td>
		<td>
		<?php
			$query7= "SELECT marks FROM sample_table WHERE id='2' ";
			$query_run7= mysqli_query($con,$query7);
			$row= mysqli_fetch_assoc($query_run7);
			echo $row['marks'];
		?>
		</td>
	</tr>

</table>
</div>


<div class="container">
	<h1 class="page-header"> This table is not connected to DB 	</h1>
<table class="table table-bordered table-hover table-responsive">

	<thead class="text-centered">
		<th>Serial</th>
		<th>Serial</th>
		<th>Serial</th>
		<th>Serial</th>
	</thead>
	<tr>
		<td>Serial</td>
		<td>Serial</td>
		<td>Serial</td>
		<td>Serial</td>
	</tr>
	<tr>
		<td>Serial</td>
		<td>Serial</td>
		<td>Serial</td>
		<td>Serial</td>
	</tr>
	<tr>
		<td>Serial</td>
		<td>Serial</td>
		<td>Serial</td>
		<td>Serial</td>
	</tr>

</table>

</div>














