<?php

namespace byfax\model\entity\faxout;

use byfax\model\response\common\ApiResponse;

/**
 * FaxReportUpload short summary.
 * FaxReportUpload description.
 *
 */
class FaxReportUpload extends ApiResponse{
	/**
	 * File reference UUID
	 *
	 * @var string
	 */
	public $fileRef;
}