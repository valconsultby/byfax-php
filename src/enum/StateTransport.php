<?php

namespace byfax\enum;

/**
 * EStateTransport short summary.
 * EStateTransport description.
 *
 */
abstract class StateTransport{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const READY="READY";
	/**
	 * @var string
	 */
	const ASSIGNED="ASSIGNED";
	/**
	 * @var string
	 */
	const QUEUED="QUEUED";
	/**
	 * @var string
	 */
	const PREPARING="PREPARING";
	/**
	 * @var string
	 */
	const PLACED="PLACED";
	/**
	 * @var string
	 */
	const DIALING="DIALING";
	/**
	 * @var string
	 */
	const RINGING="RINGING";
	/**
	 * @var string
	 */
	const CONNECTED="CONNECTED";
	/**
	 * @var string
	 */
	const NEGOTIATING="NEGOTIATING";
	/**
	 * @var string
	 */
	const TRAINING="TRAINING";
	/**
	 * @var string
	 */
	const TRANSMITTING="TRANSMITTING";
	/**
	 * @var string
	 */
	const SUCCESS="SUCCESS";
	/**
	 * @var string
	 */
	const PAUSED="PAUSED";
	/**
	 * @var string
	 */
	const FAILED="FAILED";
	/**
	 * @var string
	 */
	const ABORTED="ABORTED";
	/**
	 * @var string
	 */
	const CANCELLED="CANCELLED";
}