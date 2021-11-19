<?php

namespace byfax\model\response\document;

use byfax\model\response\common\ApiResponse;

/**
 * Document upload response object to obtain uploading results
 *
 */
class ApiResponseDocUpload extends ApiResponse{
	/**
	 * Document refID
	 *
	 * @var string
	 */
	public $documentRef;
	/**
	 * Document type
	 *
	 * @var string
	 */
	public $documentType;
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
	 * File MIME type
	 *
	 * @var string
	 */
	public $fileMime;
}