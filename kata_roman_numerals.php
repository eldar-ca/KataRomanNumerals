<?php

class Roman {
	public $units = array(
		1 => 'I', 5 => 'V', 10 => 'X', 50 => 'L', 100 => 'C', 500 => 'D', 1000 => 'M', 5000 => 'MMMMM',
	);

	public function getRoman($num)
	{
		$numZero = sprintf("%04d", $num);
		$romanFinal = '';
		for ($i = 3; $i>=0; $i--)
		{
			$romanFinal.= $this->getRomanRanges(substr($numZero, (-$i + 3), 1), pow(10, $i));
		}

		return $romanFinal;
	}

	private function getRomanRanges($num, $decs)
	{
		if ($num == 0)
			return NULL;

		if (($num % 5) <= 3 AND ($num % 5) > 0)
		{
			$rom = str_repeat($this->units[(5*$decs)], floor($num / 5));
			$rom.= str_repeat($this->units[(1*$decs)], $num - (floor($num / 5) * 5));
		}
		else
		{
			$rom = str_repeat($this->units[(1*$decs)], ((ceil($num / 5) * 5) - $num)) . $this->units[((ceil($num / 5) * 5) * $decs)];
		}

		return $rom;
	}
}
?>