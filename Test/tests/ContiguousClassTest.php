<?php 

class ContiguousClassTest extends PHPUnit_Framework_TestCase
{
    public function testContiguous()
    {
        // create class object
        $obj = new ContiguousClass();
 
        // define inputs
        $array = [1,-2,-3,-4,-5, 18, -7, 20];
        // real value
        $realValue = $obj->contiguous($array);
        // set expected value
        $expectedVlaue = 31;
        // Assert
        $this->assertEquals($expectedVlaue, $realValue);
    }

	 public function testContiguous2()
    {
        // create class object
        $obj = new ContiguousClass();
 
        // define inputs
        
		$array2 = [-5,-2,13,4,-5, 92, -7, 10];
        // real value
		$realValue2 = $obj->contiguous($array2);
        // set expected value
		$expectedVlaue2 = 107;
        // Assert
        $this->assertEquals($expectedVlaue2, $realValue2);
    }
	}	
