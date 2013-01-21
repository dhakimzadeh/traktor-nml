<?php

namespace TraktorNml;

class TraktorCollection 
{

	protected $version = 0;

	public function version()
	{
		return $this->version;
	}

	protected $entries = array();

	public function numEntries()
	{
		return count($this->entries);
	}

	private function initValues()
	{
		$this->version = 0;
		$this->collectionEntries = array();
	}


	private function loadCollections($xml)
	{
		foreach ($xml->COLLECTION->ENTRY as $item)
		{
			$entry = new TraktorNmlCollectionEntry();
			$entry->load($item);
			$this->entries[] = $entry;
		}
		
	}
	

	public function load($content)
	{	
		$this->initValues();

		try {
			$xml = simplexml_load_string($content);

			// Global Info
			$this->version = $this->xml_string_attribute($xml,'VERSION');


			$this->loadCollections($xml->COLLECTION);

			//echo print_r($this,true);
		} catch (Exception $e) {
			print_r($e);
		}
	}

	private function xml_string_attribute($object, $attribute)
	{
	    if(isset($object[$attribute]))
	        return (string) $object[$attribute];
	}

	private function xml_int_attribute($object, $attribute)
	{
	    if(isset($object[$attribute]))
	        return (int) $object[$attribute];
	}
}