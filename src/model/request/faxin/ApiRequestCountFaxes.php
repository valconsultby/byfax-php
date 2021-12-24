<?php

namespace byfax\model\request\faxin;

/**
 * CRequestCountFaxes class.
 *
 */
class ApiRequestCountFaxes{
	/**
	 * Number in $didE164 international form
	 *
	 * @var string
	 */
	public $didE164;
	/**
	 * Date to list faxes from
	 *
	 * @var string
	 */
	public $dateFrom;
	/**
	 * Date to list faxes to
	 *
	 * @var string
	 */
	public $dateTill;
	/**
	 * Message delivery status
	 *
	 * @var boolean
	 */
	public $isSuccess;
	/**
	 * Message file presence filter
	 *
	 * @var boolean
	 */
	public $hasFile;
}