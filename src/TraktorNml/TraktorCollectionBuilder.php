<?php

namespace TraktorNml;


class TraktorCollectionBuilder
{
	/**
	 * Builds the TraktorCollection from passed Xml String
	 * 
	 * @param  [type] $xmlString [description]
	 * @return [type]            [description]
	 */
	public function buildFromXML($xmlString)
	{
		$xml = simplexml_load_string($xmlString);

		$parser = new TraktorNmlParser15(); // we can version this parser by NML version 15,16.. etc

		return $parser->createCollection($xml);
	}
}