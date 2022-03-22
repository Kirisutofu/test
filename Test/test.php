<?php

	$a = 1;
	$temp_valeur = null;
	$result = null;

	while($a==1){


		$valeur = readline('entrez une valeur:');

		if($valeur == $temp_valeur)
		{

			echo $result ."\n";
		}
		else
		{

			$result = $valeur * $valeur;
			echo $result ."\n";
			$temp_valeur = $valeur;

		}


	}


	

	

	

	