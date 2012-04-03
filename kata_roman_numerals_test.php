<?php

require 'kata_roman_numerals.php';
   
class RomanTest extends PHPUnit_Framework_TestCase {
   
	public function testGetRoman() {
		$num = new Roman();
		$this->assertEquals(
			array(
				$num->getRoman(1),
				$num->getRoman(2),
				$num->getRoman(3),
				$num->getRoman(4),
				$num->getRoman(5),
				$num->getRoman(6),
				$num->getRoman(7),
				$num->getRoman(8),
				$num->getRoman(9),
				$num->getRoman(10)
			),
			array(
				'I',
				'II',
				'III',
				'IV',
				'V',
				'VI',
				'VII',
				'VIII',
				'IX',
				'X'
			)
		);
	}

	public function testGetRomanTens() {
		$num = new Roman();
		$this->assertEquals(
			array(
				$num->getRoman(27),
				$num->getRoman(49),
				$num->getRoman(54)
			),
			array(
				'XXVII',
				'XLIX',
				'LIV'
			)
		);
	}

	public function testGetRomanHundreds() {
		$num = new Roman();
		$this->assertEquals(
			array(
				$num->getRoman(127),
				$num->getRoman(149),
				$num->getRoman(154)
			),
			array(
				'CXXVII',
				'CXLIX',
				'CLIV'
			)
		);
	}
	
	public function testGetRomanThousands() {
		$num = new Roman();
		$this->assertEquals(
			array(
				$num->getRoman(2427),
				$num->getRoman(2012),
				$num->getRoman(1944),
				$num->getRoman(3000),
				$num->getRoman(3044)
			),
			array(
				'MMCDXXVII',
				'MMXII',
				'MCMXLIV',
				'MMM',
				'MMMXLIV'
			)
		);
	}
	
}
