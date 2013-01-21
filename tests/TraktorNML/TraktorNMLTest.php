<?php


use org\bovigo\vfs\vfsStream;
use \TraktorNML;

/**
 * TraktorNMLTest
 */
class TraktorNMLTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var vfsStreamDirectory
	 */
	private $vfs;

	public function setUp() 
	{
		$this->vfs = vfsStream::setup('root');
		vfsStream::copyFromFileSystem(__DIR__ . '/../../fixtures/');
	}

	public function testLoadExampleNMLFilesFromVfs() 
	{	
		$this->assertCount(2, $this->vfs->getChildren()); // should be two files
		$this->assertEquals('test1.nml',$this->vfs->getChild('test1.nml')->getName());
	}
}