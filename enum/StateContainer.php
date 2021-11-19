<?php

namespace byfax\enum;

/**
 * FaxContainer state codes enumeration
 *
 */
abstract class StateContainer{
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
	const PROCESSING="PROCESSING";
	/**
	 * @var string
	 */
	const READY="READY";
	/**
	 * @var string
	 */
	const UNPAID="UNPAID";
	/**
	 * @var string
	 */
	const DELAYED="DELAYED";
	/**
	 * @var string
	 */
	const QUEUED="QUEUED";
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
	const FAILED="FAILED";
	/**
	 * @var string
	 */
	const DONE="DONE";
	/**
	 * @var string
	 */
	const DELETED="DELETED";
}