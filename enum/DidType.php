<?php

namespace byfax\enum;

/**
 * EDidType short summary.
 * EDidType description.
 */
abstract class DidType{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const GEOGRAPHIC="GEOGRAPHIC";
	/**
	 * @var string
	 */
	const TOLL_FREE="TOLL_FREE";
	/**
	 * @var string
	 */
	const NATIONAL="NATIONAL";
	/**
	 * @var string
	 */
	const MOBILE="MOBILE";
	/**
	 * @var string
	 */
	const INUM="INUM";
	/**
	 * @var string
	 */
	const SHARED_COST="SHARED_COST";
	/**
	 * @var string
	 */
	const SPECIAL="SPECIAL";
}