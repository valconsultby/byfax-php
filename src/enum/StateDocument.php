<?php

namespace byfax\enum;

/**
 * FaxDocument state values enumeration
 *
 */
abstract class StateDocument{
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
	const CONVERTING="CONVERTING";
	/**
	 * @var string
	 */
	const READY="READY";
	/**
	 * @var string
	 */
	const FAILED="FAILED";
	/**
	 * @var string
	 */
	const DELETED="DELETED";
}