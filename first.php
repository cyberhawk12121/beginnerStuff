<?php 

	/* echo 'Hello World! "I\'m great", this is the new phrase joined by comma operator'  ; 
	echo "<h1 id=\" Sameer\">   This is an HTML Heading </h1>";
	$age=4;
	if($age<3)
		echo "Naize Man !! ","</br>" ;
	else
		echo "Not Naize Man", "</br>";
	for ($i=1; $i<=10  ; $i++) {    #First type of loop 
			# code...
		echo "$i","</br>";
		}	
	$j= "Sameer";
	$n= strlen($j);  # BUilt-in function to find length of a string in numbers
	echo "The length of string ", $j ," ","is ", $n, "</br></br></br>" ;
	$str= " There we go !! " ;
	#$p= substr_replace($str,'Here' ,0,5); #This is the built-in function to replace a specific string from a text
	$p= str_replace('There',' Here', $str);
	echo $p, "</br>","</br>", "</br>" ;
	
	// Associative array
	$array = array('Sameer' =>100.00 ,'Ryan'=> 190, 'Tanmay'=> 200.00);	
	echo $array['Sameer'];			# A different way of printing these arrays
	// Associative Array

	// foreach loop
	echo "</br>" ;
	$original_array = array('Sameer', 'Hemant', 'aman');
	$assoc_array = array('Dome'=>1002 ,'Chumad'=> 200,'bhomba'=> 123);
	foreach ($original_array as $value) { // At the first time the "value variable" will hold Sameer then in next iteration it will hold Hemant and so on. //
		echo "Value: ". $value. "</br>". "</br>" ;
	}
	foreach ($assoc_array as $key=> $value){
		echo $key. ': '. $value. '</br></br> ';
	}
	// foreach loop

	// Implode function: It just takes a array and "implodes" it into a string
	$here = array('Sam','callahan', 'is', 'great');
	$implode_string= implode(' ', $here);
	echo $implode_string; 
			
	// Explode Function: It just takes a string and makes an array out of it.

 	$newstring= 'Here we go man';
 	$this_is_explode= explode(' ', $newstring);
 	foreach ($this_is_explode as $value) {
 		echo $value. "</br>" ;
 	}
*/

/*	 $here = array(31,4231,12,312,41,123);			--------->  # array called in the function <--------
	 average($here);			// Data in the variable $here is used by the function average()
	 function average($array)  	// The data in the variable $here is reflected in the function average() through the variable $array. This $array uses the data of $here to calculate the things in the definition. 
	 {
	 	$total=0;
	 	foreach ($array as $value) {
	 		$i=count($array); 					# -----------> This "count" function counts the number of elements in any string or array
	 		$total+=$value;
	 		}
	 		$averager= $total/$i;
	 		echo $averager;
 */

/*	$variable=0;			#	------------> Example of while loop <-------------
	while ($variable<= 10) {
		echo $variable ."<br>";
		$variable+=1;
		} 			
*/
function add($num1,$num2){
	$result= $num1+$num2;
	echo $result;
}

add(12,123);

?>
