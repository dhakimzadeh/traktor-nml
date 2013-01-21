<?php

use org\bovigo\vfs\vfsStream;
use \TraktorNML\TraktorNML;

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


	public function testLoadNML_Header() 
	{
		$content = $this->vfs->getChild('test1.nml')->getContent();

		$traktorNML = new TraktorNML();
		$traktorNML->load($content);

		$this->assertEquals($traktorNML->version(), 15);
		$this->assertEquals($traktorNML->getNumCollectionEntries(), 3);
	}
	

}