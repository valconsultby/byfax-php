<?php

namespace byfax\enum;

/**
 * EDidAddressType short summary.
 * EDidAddressType description.
 */
abstract class DidAddressType{
	/**
	 * @var string
	 */
	const UNKNOWN="UNKNOWN";
	/**
	 * @var string
	 */
	const WORLDWIDE="WORLDWIDE";
	/**
	 * @var string
	 */
	const NATIONAL="NATIONAL";
	/**
	 * @var string
	 */
	const LOCAL="LOCAL";
}