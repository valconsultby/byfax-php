<?php

namespace byfax\enum;

/**
 * Fax-compression values enumeration
 * 
 */
abstract class FaxCompression{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const MH="MH";
	/**
	 * @var string
	 */
	const MR="MR";
	/**
	 * @var string
	 */
	const MMR="MMR";
}