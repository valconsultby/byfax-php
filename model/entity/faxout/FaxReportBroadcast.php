<?php

namespace byfax\model\entity\faxout;


use byfax\model\response\common\ApiResponse;

/**
 * CEntityFaxReportBroadcast short summary.
 * CEntityFaxReportBroadcast description.
 *
 */
class FaxReportBroadcast extends ApiResponse{
	/**
	 * Message broadcasting reference
	 *
	 * @var string
	 */
	public $broadcastRef;
	/**
	 * Container state code
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
	public $jobCreated;
	/**
	 * @var string
	 */
	public $jobDelivered;
	/**
	 * @var int
	 */
	public $recipientCount;
	/**
	 * @var double
	 */
	public $price;
	/**
	 * @var double
	 */
	public $cost;
	/**
	 * @var string
	 */
	public $currency;
}