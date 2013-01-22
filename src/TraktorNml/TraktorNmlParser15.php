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

	public function loadCollections($collectionXml)
	{
		foreach ($collectionXml->ENTRY as $entryXml)
		{
			$entry = new TraktorCollectionEntry();
			$entry = $this->loadCollectionEntry($entryXml,$entry);
			$this->collection->addEntry($entry);
		}	
	}

	public function loadCollectionEntry($entryxml, TraktorCollectionEntry $entry)
	{
		
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