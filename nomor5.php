<?php 
function CountVowels($String) {
	preg_match_all('/[aeiou]/i', $String, $matches);
	return count($matches[0]);
}
	print_r(CountVowels('Ini Adalah Test'));

 ?>
