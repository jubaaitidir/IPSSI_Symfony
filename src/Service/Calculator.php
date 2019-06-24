<?php

declare(strict_type=1);
namespace App\Service;

class Calculator
{
	public function add(int $firstNumber, int $secondNumber):int
	{
		return ($firstNumber + $secondNumber);
	}

}

?>
