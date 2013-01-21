<?php

namespace TraktorNml;

class TraktorCollection 
{

	protected $version;
	    	
	public function getVersion()
	{
		return $this->version;
	}
	
	public function setVersion($value)
	{
		$this->version = (int) $value;
	}

	//-- entries
	protected $entries = array();
	
	public function numEntries()
	{
		return count($this->entries);
	}
	
	public function getEntries()
	{	
		return $this->entries;
	}
	
	public function setEntries($entries)
	{
		$this->entries = $entries;
	}
	
	public function addEntry($entry, $key=null)
	{
		if ($key !== null) {
			$this->entries[$key] = $entry;
		} else {
			$this->entries[] = $entry;
		}
	}
	//-- entries end 

	private function initValues()
	{
		$this->version = 0;
		$this->entries = array();
	}
}