<?php

namespace TraktorNml;

class TraktorCollection 
{

	/**
	 * @var int version
	 */
	protected $version;
	
	/**
	 * Get Version
	 * 
	 * @return int Version
	 */
	public function getVersion()
	{
		return $this->version;
	}
	
	/**
	 * Set Version
	 *
	 * @param int $value value of Version to set
	 * @return void
	 */
	public function setVersion($value)
	{
		$this->version = (int) $value;
	}

	
	protected $entries = array();
	
	/**
	 * Count number of items in Entries
	 * 
	 * @return int number of Entries
	 */
	public function numEntries()
	{
		return count($this->entries);
	}
	
	/**
	 * Get Entries
	 * 
	 * @return array Entries
	 */
	public function getEntries()
	{	
		return $this->entries;
	}
	
	/**
	 * Set Entries
	 *
	 * @param array $entries an array of Entries to set
	 *
	 * @return void
	 */
	public function setEntries($entries)
	{
		$this->entries = $entries;
	}
	
	/**
	 * Add an Entries item
	 * 
	 * @return void
	 */
	public function addEntry($entry, $key=null)
	{
		if ($key !== null) {
			$this->entries[$key] = $entry;
		} else {
			$this->entries[] = $entry;
		}
	} 

	private function initValues()
	{
		$this->version = 0;
		$this->entries = array();
	}
}