<?php

namespace TraktorNML;

class TraktorNML 
{

	protected $version = 0;

	public function version()
	{
		return $this->version;
	}


	protected $numCollectionEntries;

	public function getNumCollectionEntries()
	{
		return $this->numCollectionEntries;
	}
	

	public function load($content)
	{	
		try {
			$xml = simplexml_load_string($content);

			$this->version = $this->xml_string_attribute($xml,'VERSION');

			$this->numCollectionEntries = $this->xml_int_attribute($xml->COLLECTION,'ENTRIES');


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