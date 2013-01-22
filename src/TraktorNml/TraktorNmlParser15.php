<?php

namespace TraktorNml;

/**
 * This class parses NML version 15
 */
class TraktorNmlParser15 implements TraktorNmlParserInterface
{
	protected $collection;

	public function createCollection($xml)
	{
		$this->collection = new TraktorCollection();

		$this->loadGlobalValues($xml);

		$this->loadCollections($xml->COLLECTION);

		return $this->collection;
	}

	public function loadGlobalValues($xml)
	{
		$this->collection->setVersion($this->xml_string_attribute($xml,'VERSION'));
	}

	public function loadCollections($xml)
	{
		foreach ($xml->ENTRY as $item)
		{
			$entry = new TraktorCollectionEntry();
			$this->collection->addEntry($entry);
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