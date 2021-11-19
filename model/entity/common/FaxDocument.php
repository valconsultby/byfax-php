<?php

namespace byfax\model\entity\common;

/**
 * Fax document object, container refID and document file content
 *
 */
class FaxDocument{
	/**
	 * Document refID (max 32 symbols)
	 *
	 * @var string
	 */
	public $documentRef;
	/**
	 * Document file object
	 *
	 * @var FaxFile
	 */
	public $documentFile;
}