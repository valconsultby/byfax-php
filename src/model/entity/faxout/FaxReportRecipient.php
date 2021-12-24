<?php

namespace byfax\model\entity\faxout;

use byfax\model\response\common\ApiResponse;

/**
 * FaxReportRecipient short summary.
 * FaxReportRecipient description.
 *
 */
class FaxReportRecipient extends ApiResponse{
	/**
	 * Message self reference
	 *
	 * @var string
	 */
	public $messageRef;
	/**
	 * Job recipient number
	 *
	 * @var string
	 */
	public $recipientNumber;
}