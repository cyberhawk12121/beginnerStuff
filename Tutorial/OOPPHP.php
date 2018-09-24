<?php

/* -->THIS CLASS SHOWS THE USE OF CONTRUCTOR AND $this VARIABLE <--

class Name{
	public $name;
	public $age; 

	public function __construct($name, $age){
		$this->name= $name;
		$this->age=$age;
		// echo "Sameer is great he finally learned how to make a constructor and invoke it. This is a line in contructor";
	}
	public function sentence(){
		return $this->name. ' is '.$this->age. ' years old'; // This is a line in a seperate function that has to be called using the class object';	 
	}
}
$person= new Name('Sameer', 19);

// $person->name= 'sameer';
// $person->age= 19;

echo "<br>".$person->sentence();
*/ 
/* Explaination: When we instantiated the class by making a object $person, we called the constructor automatically. This constructor has the name whatever we enter in the parenthesis during the time we write the object name. Then you used that name variable in another function, which was using those variables so it reflected in the return sentence. 

In simple language: Pehle constructor me jo parameter pass kia uski value humne uss name me rakh dia jo class me define kia h. $this->name=$name karke. Isme jo $name h na, vo humara parameter h. And humne baad me jab isko ajeeb tareeke se object making ke time call kia to humne isme values daal di thi 'sameer' and 19.
ab ye values reflect hui uss sentence me jo sentence() naam ke function me use hui h un pehle waali public $name vagerah ki wajah se. kyuki public $name me to humne $name dala tha in the contructor and uss $name ki value sameer daal dia tha baad me. So that's how it all worked.  
 */

?>


<?php 

/*  -->THIS SHOWS HOW TO ACCESS PRIVATE MEMBER OF THE CLASS USING THE GETTER FUNCTION funtion_for_private(). <--
	FOR ACCESSING PRIVATE MEMBER WE HAVE TO FIRST MAKE A FUNCTION INSIDE THE SAME CLASS, WHICH GIVES IT THE COMMAND OF RETURNING SOME VALUE OR WHATEVER. 
	THEN WE JUST CAN ACCESS THE FUNCTION EASILY USING THE OBJECT.  


class show{
	private $id;
	public $name;

	public function getter_for_private(){
		return $this->id;
	} 

	public function __construct($aid, $naam){
		$this->id=$aid;
		$this->name= $naam;
	}

}

$object= new show(12, 'sameer');
echo $object->getter_for_private();
*/
?>

<?php
	/* --> THIS SNIPPET SHOWS THE USE OF INTERFACE. INTERFACE IS USED TO DEFINE THE MEMBERS OF CLASS WHICH MUST BE DEFINED IN SOME OTHER CLASS. <--
	   INTERFACE IS USED SO THAT WE CAN DEFINE A CLASS WHOSE CONTENTS HAS TO CONSTANT AND WE DON'T WANT TO CHANGE IT IN FUTURE. SO WE MUST KNOW WHEN TO MAKE AN INTERFACE.	*/	
	 

 interface showtime{
 	 function sam();
 	public function sameer();

 }
interface show{
	function sameer();
}

 class WOW implements showtime, show{

 	public function sam(){
 		return "This implements first interface";
 	}
 	public function sameer(){
 		return "<br> This implements another interface";
 	}

 } 
$ok= new WOW;
echo $ok->sam(). $ok->sameer();

























