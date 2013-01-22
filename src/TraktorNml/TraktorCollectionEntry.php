<?php

namespace TraktorNml;

/**
 * TraktorCollectionEntry
 *
 * In NML_VERSION_15 an entry contains these fields
 * 
 * [MODIFIED_DATE] => 2013/1/20 YYYY/M/DD
 * [MODIFIED_TIME] => 60678
 * [AUDIO_ID] => ANoUQzMzQkMlUyJVIVn9vrv7zqv63q357Z3q/a7a66/c+7+86r+96t+u2u6v2u2+y/2+u/vOvPrerfntnurtvtvsv8zsz73rz63qzp7a7r/L/b64VWZmipdndEM0Qkau6/y+yuy/zOvOvOp2VURWVVRXUyOFQ4r8vsv6zqz63qUyIhzq7L7b7L/M/M+96s+u2d6u2v6uyuy+uvzOu+vOrPrdrtrtrtrsrrrbv7zqvq3qpTQkZTREUzNGdXac/N/N+++9+v6+6/yv6/y/zOu/vfvPverfz9vtrsv+38vszrz837z63q36/q7q/b/c/L/M67+9+s+t6XZWRGZVVFYxAA==
 * [TITLE] => Dub Be Good To Me
 * [ARTIST] => Beats International	
 */
class TraktorCollectionEntry
{
	/**
	 * @var int modifiedDate
	 */
	protected $modifiedDate;
	
	/**
	 * Get ModifiedDate
	 * 
	 * @return ModifiedDate
	 */
	public function getModifiedDate()
	{
		return $this->modifiedDate;
	}
	
	/**
	 * Set ModifiedDate
	 *
	 * @param $value value of ModifiedDate to set
	 * @return void
	 */
	public function setModifiedDate($value)
	{
		$this->modifiedDate = $value;
	}

	/**
	 * @var modifiedTime
	 */
	protected $modifiedTime;
	
	/**
	 * Get ModifiedTime
	 * 
	 * @return ModifiedTime
	 */
	public function getModifiedTime()
	{
		return $this->modifiedTime;
	}
	
	/**
	 * Set ModifiedTime
	 *
	 * @param $value value of ModifiedTime to set
	 * @return void
	 */
	public function setModifiedTime($value)
	{
		$this->modifiedTime = $value;
	}

	/**
	 * @var audioID
	 */
	protected $audioID;
	
	/**
	 * Get AudioID
	 * 
	 * @return AudioID
	 */
	public function getAudioID()
	{
		return $this->audioID;
	}
	
	/**
	 * Set AudioID
	 *
	 * @param $value value of AudioID to set
	 * @return void
	 */
	public function setAudioID($value)
	{
		$this->audioID = $value;
	}

	/**
	 * @var title
	 */
	protected $title;
	
	/**
	 * Get Title
	 * 
	 * @return Title
	 */
	public function getTitle()
	{
		return $this->title;
	}
	
	/**
	 * Set Title
	 *
	 * @param $value value of Title to set
	 * @return void
	 */
	public function setTitle($value)
	{
		$this->title = $value;
	}

	/**
	 * @var artist
	 */
	protected $artist;
	
	/**
	 * Get Artist
	 * 
	 * @return Artist
	 */
	public function getArtist()
	{
		return $this->artist;
	}
	
	/**
	 * Set Artist
	 *
	 * @param $value value of Artist to set
	 * @return void
	 */
	public function setArtist($value)
	{
		$this->artist = $value;
	}
}