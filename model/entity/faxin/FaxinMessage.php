<?php

namespace byfax\model\entity\faxin;

/**
 * CEntityFaxMessage short summary.
 * CEntityFaxMessage description.
 *
 */
class FaxinMessage{
	/**
	 * Message RefID
	 *
	 * @var string
	 */
	public $refID;
	/**
	 * Recipient number in international format
	 *
	 * @var string
	 */
	public $recipientE164;
	/**
	 * Sender number in E164 format
	 *
	 * @var string
	 */
	public $senderE164;
	/**
	 * Message delivery status
	 *
	 * @var string
	 */
	public $state;
	/**
	 * Message error status
	 *
	 * @var string
	 */
	public $stateEx;
	/**
	 * Message delivery status message
	 *
	 * @var string
	 */
	public $stateMessage;
	/**
	 * Message received date-time
	 *
	 * @var string
	 */
	public $dateReceived;
	/**
	 * Call line duration
	 *
	 * @var int
	 */
	public $durationCall;
	/**
	 * Call fax duration
	 *
	 * @var int
	 */
	public $durationFax;
	/**
	 * local caller identification
	 *
	 * @var string
	 */
	public $localSID;
	/**
	 * remote caller identification
	 *
	 * @var string
	 */
	public $remoteSID;
	/**
	 * Message pages received
	 *
	 * @var int
	 */
	public $pages;
	/**
	 * Message speed
	 *
	 * @var int
	 */
	public $speed;
	/**
	 * Message ecm
	 *
	 * @var boolean
	 */
	public $ecm;
	/**
	 * Message transmission quality
	 *
	 * @var string
	 */
	public $quality;
	/**
	 * Message transmission compression
	 *
	 * @var string
	 */
	public $compression;
	/**
	 * Message file presence
	 *
	 * @var boolean
	 */
	public $hasFile;
}