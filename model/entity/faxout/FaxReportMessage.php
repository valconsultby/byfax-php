<?php

namespace byfax\model\entity\faxout;

use byfax\model\response\common\ApiResponse;

/**
 * CEntityFaxReportMessage short summary.
 * CEntityFaxReportMessage description.
 *
 */
class FaxReportMessage extends ApiResponse{
	/**
	 * Message broadcasting reference
	 *
	 * @var string
	 */
	public $broadcastRef;
	/**
	 * Message send reference*
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
	 * Job stateEx code
	 *
	 * @var string
	 */
	public $jobStateEx;
	/**
	 * Job stateEx message
	 *
	 * @var string
	 */
	public $jobStateExMessage;
	/**
	 * @var string
	 */
	public $localID;
	/**
	 * @var string
	 */
	public $remoteID;
	/**
	 * @var string
	 */
	public $callStarted;
	/**
	 * @var string
	 */
	public $faxStarted;
	/**
	 * @var string
	 */
	public $callEnded;
	/**
	 * @var int
	 */
	public $callDuration;
	/**
	 * @var int
	 */
	public $lineDuration;
	/**
	 * @var int
	 */
	public $faxDuration;
	/**
	 * @var int
	 */
	public $attempt;
	/**
	 * @var string
	 */
	public $recipientNumber;
	/**
	 * @var int
	 */
	public $pagesTotal;
	/**
	 * @var int
	 */
	public $pagesSent;
	/**
	 * @var int
	 */
	public $faxSpeed;
	/**
	 * @var double
	 */
	public $cost;
	/**
	 * @var string
	 */
	public $currency;
}