<?php

use org\bovigo\vfs\vfsStream;
use \TraktorNml\TraktorCollection;

/**
 * TraktorCollectionTest
 */
class TraktorCollectionTest extends PHPUnit_Framework_TestCase
{
	public function testGetSetVersion() 
	{
		$mock = $this->getMock('TraktorCollection', array('getVersion','setVersion'));
		$mock->expects($this->once())
			->method('getVersion')
			->will($this->returnValue(99));
		$mock->expects($this->once())
			->method('setVersion');

		$mock->setVersion(99);
		$this->assertEquals(99, $mock->getVersion());
	}

	public function testAddCountEntries() 
	{
		$mock = $this->getMock('TraktorCollection', array('addEntry','countEntries'));
		$mock->expects($this->exactly(2))
			->method('addEntry');
		$mock->expects($this->exactly(3))
			->method('countEntries')
			->will($this->onConsecutiveCalls(0,1,2));

		$this->assertEquals(0, $mock->countEntries());
		$mock->addEntry(99);
		$this->assertEquals(1, $mock->countEntries());
		$mock->addEntry(99);
		$this->assertEquals(2, $mock->countEntries());
	}

}