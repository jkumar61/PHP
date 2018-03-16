<?php
namespace LeadDeskTasks;

interface MaxSubarray
{
    /**
     * Maximum subarray
     *
     * Description:
     * Subarray is a part of the original one dimensional array. In this problem you need to find out the maximum sum
     * that can be calculated by taking contiguous part of the original array.
     *
     * Tasks:
     * 1) You need to create a concrete implementation of this interface. congiguous method should find the
     *    contiguous subarray from given array that has the biggest sum.
     * 2) You also need to create a PHPUnit test suite to test your implementation (https://phpunit.de/) with
     *    few (>2) test cases
     *
     * Input definition (you don't need to check these in code):
     * - Input array will have 1...1e6 elements
     * - Integer values in the array will be from range -1e6...1e6.
     * - Input array can contain non-numeric values. Resulting subarray is not allowed to extend over non-numeric values.
     *   Numbers as text are OK however (e.g. '54')
     *
     * Development restrictions and rules:
     * - Empty subarrays should not be considered. Selected subarray must contain at least one element.
     * - Whole input array is also a valid subarray.
     * - Use PHP 5.6/7 and mention the version used in the implementation as a comment
     * - Follow the PSR-2 coding standard (http://www.php-fig.org/psr/psr-2/)
     * - Write descriptive code that is easy to understand
     *
     * Example:
     * - -1 1 5 -6 3 => maximum contiguous sum is 6 (1+5)
     *
     * @param array $array input values
     * @return int maximum possible sum of contiguous subarray
     */
    public function contiguous($array);
}
	class Task implements MaxSubarray
	{
		function contiguous($array) {
		    $total = $max_total = 0;
		    $count = count($array);
		
		for($i = 0; $i < $count; $i++) 
		{
			$total += $array[$i];
			
			// Reset the total to 0
			if($total < 0) $total = 0;
			
			// Update the max total if we have total more than max total
			if($max_total < $total) $max_total = $total;
		}
			return $max_total;
		}
	}
	
$task = new Task();
	  $array = [-5,-2,13,4,-5, 92, -7, 10];
	//$array = [1,-2,-3,-4,-5, 18, -7, 20];
	echo $task->contiguous($array);
	
