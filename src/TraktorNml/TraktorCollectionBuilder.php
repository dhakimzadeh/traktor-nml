<?php

namespace TraktorNml;

class TraktorCollectionBuilder
{
	public function buildFromXML($xmlString)
	{
		$collection = new TraktorCollection();
		$collection->load($xmlString);
		return $collection;
	}

}