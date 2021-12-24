<?php

namespace byfax\model\entity\faxout;

use byfax\model\response\common\ApiResponse;

/**
 * FaxReportProcess short summary.
 * FaxReportProcess description.
 *
 */
class FaxReportProcess extends ApiResponse{
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
	 * Message self reference
	 *
	 * @var string
	 */
	public $messageRef;
	/**
	 * Job state code
	 *
	 * @var string
	 */
	public $jobState;
	/**
	 * Job attempt applied
	 *
	 * @var int
	 */
	public $jobAttempt;
	/**
	 * Job recipient number
	 *
	 * @var string
	 */
	public $recipientNumber;
}