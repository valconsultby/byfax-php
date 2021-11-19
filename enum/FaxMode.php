<?php

namespace byfax\enum;

/**
 * Fax conversion mode values enumeration
 *
 */
abstract class FaxMode{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const TEXT="TEXT";
	/**
	 * @var string
	 */
	const PHOTO="PHOTO";
}