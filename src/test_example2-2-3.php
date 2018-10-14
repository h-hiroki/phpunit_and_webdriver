<?php
require_once 'calc.php';

class MyTestCase extends PHPUnit_Framework_TestCase {
	private static $calc;

	public static function setUpBeforeClass() {
		self::$calc = new Calculator();
		echo "create calculator\n";
	}

	public function test_add() {
		$this->assertEquals(8, self::$calc->add(6, 2));
	}

	public function test_sub() {
		$this->assertEquals(4, self::$calc->sub(6, 2));
	}

	public function test_mul() {
		$this->assertEquals(12, self::$calc->mul(6, 2));
	}

	public function test_div() {
		$this->assertEquals(3, self::$calc->div(6, 2));
	}
}
