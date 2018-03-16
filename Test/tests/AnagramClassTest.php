<?php 

class AnagramClassTest extends PHPUnit_Framework_TestCase
{
    public function testAnagram()
    {
		$obj = new AnagramClass();
		
		// define inputs
		$word1 = array('tape');
		$word2 = array('pate');
		$word1 = natsort ($word1);
		$word2 = natsort ($word2);
		//Real values
		$realValue = $obj->isAnagram($word1, $word2);
		// set expected value
        $expectedVlaue = 'assertEquals';
		// Assert
		$this->assertEquals($word1, $word2);
		
	}
	
	public function testAnagram2()
    {
		$obj = new AnagramClass();
		
		// define inputs
		$word1 = array('I hope i will be hired');
		$word2 = array('I hired will i be');
		$word1 = natsort ($word1);
		$word2 = natsort ($word2);
		//Real values
		$realValue = $obj->isAnagram($word1, $word2);
		// set expected value
        $expectedVlaue = 'assertEquals';
		// Assert
		$this->assertEquals($word1, $word2);
		
	}
}	
