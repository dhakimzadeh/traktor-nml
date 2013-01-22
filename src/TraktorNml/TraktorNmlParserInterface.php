<?php

namespace TraktorNml;

interface TraktorNmlParserInterface
{

	function createCollection($xml);

	function loadGlobalValues($xml);

	function loadCollections($collectionXml);

	function loadCollectionEntry($entryXml, TraktorCollectionEntry $entry);
}