<?php

use \TraktorNml\TraktorCollectionEntry;

/**
 * TraktorCollectionEntryTest
 *
 * [MODIFIED_DATE] => 2013/1/20 YYYY/M/DD
 * [MODIFIED_TIME] => 60678
 * [AUDIO_ID] => ANoUQzMzQkMlUyJVIVn9vrv7zqv63q357Z3q/a7a66/c+7+86r+96t+u2u6v2u2+y/2+u/vOvPrerfntnurtvtvsv8zsz73rz63qzp7a7r/L/b64VWZmipdndEM0Qkau6/y+yuy/zOvOvOp2VURWVVRXUyOFQ4r8vsv6zqz63qUyIhzq7L7b7L/M/M+96s+u2d6u2v6uyuy+uvzOu+vOrPrdrtrtrtrsrrrbv7zqvq3qpTQkZTREUzNGdXac/N/N+++9+v6+6/yv6/y/zOu/vfvPverfz9vtrsv+38vszrz837z63q36/q7q/b/c/L/M67+9+s+t6XZWRGZVVFYxAA==
 * [TITLE] => Dub Be Good To Me
 * [ARTIST] => Beats International	
 */
class TraktorCollectionEntryTest extends PHPUnit_Framework_TestCase
{
	/**
	 * testing the Get and Set methods for TraktorCollectionEntry->getModifiedDate()
	 *
	 * @covers TraktorCollectionEntry->getModifiedDate()
	 * @covers TraktorCollectionEntry->setModifiedDate()
	 */
	public function testGetSetModifiedDate() 
	{
		$object = new TraktorCollectionEntry();
		$object->setModifiedDate(1000);
		$this->assertEquals(1000, $object->getModifiedDate());
	}

	/**
	 * testing the Get and Set methods for TraktorCollectionEntry->getModifiedTime()
	 *
	 * @covers TraktorCollectionEntry->getModifiedTime()
	 * @covers TraktorCollectionEntry->setModifiedTime()
	 */
	public function testGetSetModifiedTime() 
	{
		$object = new TraktorCollectionEntry();
		$object->setModifiedTime(1000);
		$this->assertEquals(1000, $object->getModifiedTime());
	}

	/**
	 * testing the Get and Set methods for TraktorCollectionEntry->getAudioID()
	 *
	 * @covers TraktorCollectionEntry->getAudioID()
	 * @covers TraktorCollectionEntry->setAudioID()
	 */
	public function testGetSetAudioID() 
	{
		$object = new TraktorCollectionEntry();
		$object->setAudioID(1000);	
		$this->assertEquals(1000, $object->getAudioID());
	}

	/**
	 * testing the Get and Set methods for TraktorCollectionEntry->getTitle()
	 *
	 * @covers TraktorCollectionEntry->getTitle()
	 * @covers TraktorCollectionEntry->setTitle()
	 */
	public function testGetSetTitle() 
	{
		$object = new TraktorCollectionEntry();
		$object->setTitle(1000);
		$this->assertEquals(1000, $object->getTitle());
	}

	/**
	 * testing the Get and Set methods for TraktorCollectionEntry->getArtist()
	 *
	 * @covers TraktorCollectionEntry->getArtist()
	 * @covers TraktorCollectionEntry->setArtist()
	 */
	public function testGetSetArtist() 
	{
		$object = new TraktorCollectionEntry();
		$object->setArtist(1000);
		$this->assertEquals(1000, $object->getArtist());
	}
}	