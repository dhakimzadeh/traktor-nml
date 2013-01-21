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

	/**
	 * Passed in raw xml string
	 * 
	 * @param  [type] $xmlString [description]
	 * @return [type]            [description]
	 */
	public function load($xmlString)
	{	
		$this->initValues();

		try {
			$xml = simplexml_load_string($xmlString);

			$this->loadGlobalInfo($xml);
			$this->loadCollections($xml->COLLECTION);

		} catch (Exception $e) {
			print_r($e);
		}
	}

	/**
	 * Passed in as $root->COLLECTION
	 * 
	 * @param  [type] $xml [description]
	 * @return [type]      [description]
	 */
	private function loadCollections($xml)
	{
		foreach ($xml->ENTRY as $item)
		{
			$entry = new TraktorCollectionEntry();
			$entry->load($item);
			$this->entries[] = $entry;
		}	
	}

	private function loadGlobalInfo($xml)
	{
		$this->version = $this->xml_string_attribute($xml,'VERSION');
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