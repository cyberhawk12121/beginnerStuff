<?php 
/* ######### MAKING THE BACKEND LOGIC OF A CALCULATOR ######### */
class calc
{
	public $num1;
	public $num2;
	public $operation;

	function retrieve($number1, $number2, $select )
	{
		$this->num1= $number1;
		$this->num2= $number2;
		$this->operation= $select;
	}

	function answer()
	{
		switch ($this->operation) 
		{
			case 'add':
				# code...
				$result= $this->num1 + $this->num2;
				break;
				case 'subtract':
				# code...
				$result= $this->num1 - $this->num2;
				break;
				case 'multiply':
				# code...
				$result= $this->num1 * $this->num2;
				break;
			default:
			echo "ERROR: KUCCH GADBAD HAI DAYA " ;
				break;
		}
		return $result;
	}	

}

$number1= $_POST['num1'];
$number2= $_POST['num2'];
$select= $_POST['operation'];
$object= new calc; 
$object->retrieve($number1, $number2, $select);
echo $object->answer();

?>




<?php 

class calc
{
	


}

?>