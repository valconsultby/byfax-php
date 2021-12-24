<?php

namespace byfax\model\entity\common;

/**
 * The FaxFile class, used pass uploaded file data or obtain downloaded files
 *
 */
class FaxFile{
	/**
	 * File name with extention
	 *
	 * @var string
	 */
	public $fileName;
	/**
	 * File mime-type
	 *
	 * @var string
	 */
	public $fileMime;
	/**
	 * File size in bytes
	 *
	 * @var int
	 */
	public $fileSize;
	/**
	 * File MD5 checksum
	 *
	 * @var string
	 */
	public $fileCheck;
	/**
	 * File Base64 encoded data (SOAP encodes/decodes automatically)
	 *
	 * @var string
	 */
	public $fileData;
}