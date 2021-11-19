<?php

namespace byfax\model\response\cover;

use byfax\model\response\common\ApiResponse;

/**
 * Cover file upload response object to obtain uploading results
 *
 */
class ApiResponseCoverUpload extends ApiResponse{
	/**
	 * Cover refID
	 *
	 * @var string
	 */
	public $coverRef;
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