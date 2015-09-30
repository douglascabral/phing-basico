<?php
class ClasseTest extends PHPUnit_Framework_TestCase
{
	public function testIsBool() {
		$classe = new Classe;
		$this->assertTrue($classe->isBool(true));
	}
}