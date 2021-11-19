<?php

namespace byfax\model\response\common;

/**
 * Account balance response object
 *
 */
class ApiResponseBalance extends ApiResponse{
	/**
	 * Balance state value
	 *
	 * @var float
	 */
	public $balanceValue;
	/**
	 * Currency ISO-3 code
	 *
	 * @var string
	 */
	public $balanceCurrency;
}