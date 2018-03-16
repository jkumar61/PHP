<?php

class AnagramClass {
 
  public function __construct()
    {
 
    }
	public function isAnagram($word1,$word2)
		{
			return(count_chars($word1, 1) == count_chars($word2, 1));
		}	
}
