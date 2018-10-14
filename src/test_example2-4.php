<?php
require_once 'calc.php';

class MyTestCase extends PHPUnit_Framework_TestCase {
	/**
	 * @expectedException InvalidArgumentException
	 */
	public function test_div() {
		$calc = new Calculator();
		$input_a = 6;
		$input_b = 0;
		if($input_b == 0) {
			throw new InvalidArgumentException('Division By zero');
		}
		$calc->div(6, 0);
	}
}
