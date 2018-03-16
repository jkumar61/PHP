<?php

class ContiguousClass {
 
  public function __construct()
    {
 
    }
		function contiguous($array) {
		    $total = $max_total = 0;
		    $count = count($array);
		
		for($i = 0; $i < $count; $i++) 
		{
			$total += $array[$i];

			if($total < 0) $total = 0;
			
			if($max_total < $total) $max_total = $total;
		}
			return $max_total;
		}
	}
	
