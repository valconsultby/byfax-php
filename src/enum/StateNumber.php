<?php

namespace byfax\enum;

/**
 * EStateNumberLock short summary.
 * EStateNumberLock description.
 */
abstract class StateNumber{
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
	const VERIFY_PENDING="VERIFY_PENDING";
	/**
	 * @var string
	 */
	const VERIFY_PROGRESS="VERIFY_PROGRESS";
	/**
	 * @var string
	 */
	const VERIFY_FAILED="VERIFY_FAILED";
	/**
	 * @var string
	 */
	const ACTIVE="ACTIVE";
	/**
	 * @var string
	 */
	const EXPIRING="EXPIRING";
	/**
	 * @var string
	 */
	const EXPIRED="EXPIRED";
	/**
	 * @var string
	 */
	const CANCELLED="CANCELLED";
	/**
	 * @var string
	 */
	const ABORTED="ABORTED";
	/**
	 * @var string
	 */
	const FAILED="FAILED";
}