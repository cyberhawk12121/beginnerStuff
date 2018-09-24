<?php 

class calc{
	public $num1;
	public $num2;
	public $operate;

	function __construct($num1, $num2, $operate){
		$this->num1=$num1;
		$this->num2=$num2;
		$this->operate=$operate;
	}

	public function calc_method(){
		switch ($this->operate) {
			case 'add':
			 $result= $this->num1 + $this->num2;
				break;
			case 'subtract':
			 $result= $this->num1 - $this->num2;
				break;
			case 'multiply':
			 $result= $this->num1 * $this->num2;
				break;
			default: echo " ERROR !!! ";
				break;
		}
		return $result;
	}

}

$number1= $_POST['num1'];
$number2= $_POST['num2'];
$operate= $_POST['operate'];

$object= new calc($number1, $number2, $operate);
echo $object->calc_method();
