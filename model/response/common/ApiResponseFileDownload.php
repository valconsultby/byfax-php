<?php

namespace byfax\model\response\common;

use byfax\model\entity\common\FaxFile;

/**
 * The file download response object, uses to receive downloaded file binary content
 *
 */
class ApiResponseFileDownload extends ApiResponse{
	/**
	 * Downloaded file properties and binary content
	 *
	 * @var FaxFile
	 */
	public $Document;
}