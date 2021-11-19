<?php

namespace byfax\model\response\common;

/**
 * File upload response object to obtain uploading results
 *
 */
class ApiResponseFileUpload extends ApiResponse{
	/**
	 * File refID
	 *
	 * @var string
	 */
	public $fileRef;
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