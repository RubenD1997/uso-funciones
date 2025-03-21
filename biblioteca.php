<?php

function operaciones($numOne = 0, $numTwo = 0, $operation = 'S') {
	//se utiliza match para determinar la operación que debe realizarse.
	/*se utiliza strtoupper ya que el usuario puede enviar 
	la operación en minuscula y con esta función se convierte en mayuscula*/

	/*Tener en cuenta que match solo funciona en PHP 8 o versiones superiores. 
	En versiones inferiores puede utilizar switch case o un else if*/
	return match(strtoupper($operation)) {
		'S','' => ($numOne + $numTwo),
		'R' => ($numOne - $numTwo),
		'M' => ($numOne * $numTwo),
		'D' => $numTwo === 0 ? 'No se puede dividir entre 0' : ($numOne / $numTwo),
		default => 'Operación no valida'
	};
}