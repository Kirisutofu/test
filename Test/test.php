<?php

	class Number
	{

		public function __construct( public int $value)
		{
			$this->value = $value;
		
		}  
		

		public function putInSquare()
		{

				$square = $this-> value * $this->value;

				echo $square ."\n";	
				
				return $square;


		}
	}
	
	$a = 1;
	$n = null;

	while ($a==1)
	{
		$val = readline('entrez une valeur:');
		
		if($val == $n)
		{
			echo $res."\n";
		}
		else{

			$Num = new Number($val);	
			$res = $Num -> putInSquare();
			$n = $val;
			

		}
				
	}


?>	

	

	

	
