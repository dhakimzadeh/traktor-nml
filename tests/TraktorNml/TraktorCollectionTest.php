<?php

use org\bovigo\vfs\vfsStream;
use \TraktorNml\TraktorCollection;

/**
 * TraktorCollectionTest
 */
class TraktorCollectionTest extends PHPUnit_Framework_TestCase
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

	public function testLoadNml() 
	{
		$content = $this->vfs->getChild('test1.nml')->getContent();

		$collection = new TraktorCollection();
		$collection->load($content);

		$this->assertEquals($collection->version(), 15);
		$this->assertEquals($collection->numEntries(), 3);
	}
}