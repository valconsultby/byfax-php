<?php

namespace byfax\enum;

/**
 * FaxRecipient state codes enumeration
 *
 */
abstract class StateRecipient{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const PENDING="PENDING";
	/**
	 * @var string
	 */
	const PREPARING="PREPARING";
	/**
	 * @var string
	 */
	const READY="READY";
	/**
	 * @var string
	 */
	const SUBMITTING="SUBMITTING";
	/**
	 * @var string
	 */
	const SUBMITTED="SUBMITTED";
	/**
	 * @var string
	 */
	const DELIVERING="DELIVERING";
	/**
	 * @var string
	 */
	const PAUSING="PAUSING";
	/**
	 * @var string
	 */
	const RESUMING="RESUMING";
	/**
	 * @var string
	 */
	const PAUSED="PAUSED";
	/**
	 * @var string
	 */
	const ABORTING="ABORTING";
	/**
	 * @var string
	 */
	const ABORTED="ABORTED";
	/**
	 * @var string
	 */
	const CANCELLING="CANCELLING";
	/**
	 * @var string
	 */
	const CANCELLED="CANCELLED";
	/**
	 * @var string
	 */
	const SUCCESS="SUCCESS";
	/**
	 * @var string
	 */
	const FAILED="FAILED";
	/**
	 * @var string
	 */
	const DELETED="DELETED";
}