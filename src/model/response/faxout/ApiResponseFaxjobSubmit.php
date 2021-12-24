<?php

namespace byfax\model\response\faxout;

use byfax\model\entity\faxout\FaxReportRecipient;
use byfax\model\entity\faxout\FaxReportUpload;

use byfax\model\response\common\ApiResponse;

/**
 * ApiResponseFaxjobSubmit short summary.
 * ApiResponseFaxjobSubmit description.
 *
 */
class ApiResponseFaxjobSubmit extends ApiResponse{
	/**
	 * Message broadcasting reference
	 *
	 * @var string
	 */
	public $broadcastRef;
	/**
	 * Message send reference
	 *
	 * @var string
	 */
	public $sendRef;
	/**
	 * Message recipients report list
	 *
	 * @var FaxReportRecipient[]
	 */
	public $reportRecipients;
	/**
	 * Documents upload report list
	 *
	 * @var FaxReportUpload[]
	 */
	public $reportDocuments;
}