<?php
require_once 'calc.php';

class MyTestCase extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->calc = new Calculator();
		echo "create calculator\n";
	}

	public function test_add() {
		$this->assertEquals(8, $this->calc->add(6, 2));
	}

	public function test_sub() {
		$this->assertEquals(4, $this->calc->sub(6, 2));
	}

	public function test_mul() {
		$this->assertEquals(12, $this->calc->mul(6, 2));
	}

	public function test_div() {
		$this->assertEquals(3, $this->calc->div(6, 2));
	}
}
