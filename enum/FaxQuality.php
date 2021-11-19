<?php

namespace byfax\enum;

/**
 * Fax quality values enumeration
 *
 */
abstract class FaxQuality{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const BASIC="BASIC";
	/**
	 * @var string
	 */
	const STANDARD="STANDARD";
	/**
	 * @var string
	 */
	const FINE="FINE";
	/**
	 * @var string
	 */
	const SUPER_FINE="SUPER_FINE";
	/**
	 * @var string
	 */
	const ULTRA_FINE="ULTRA_FINE";
}