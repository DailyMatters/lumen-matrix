<?php

namespace App\Services;

class ConvertToAlphabetService {

	public function convert(int $number): string {
		
	$alphabet =   array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		$alpha_flip = array_flip($alphabet);
		if($number <= 25){
		  echo $alphabet[$number];	
		  return $alphabet[$number];
		}
		elseif($number > 25){
		  $dividend = ($number + 1);
		  $alpha = '';
		  $modulo;
		  while ($dividend > 0){
			$modulo = ($dividend - 1) % 26;
			$alpha = $alphabet[$modulo] . $alpha;
			$dividend = floor((($dividend - $modulo) / 26));
		  } 
		  return $alpha;
		}
	}
}
