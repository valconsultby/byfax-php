<?php

namespace byfax\enum;

/**
 * Error code valuea enumeration
 */
abstract class StateCodes{
	/**
	 * @var string
	 */
	const SUCCESS="SUCCESS";
	/**
	 * @var string
	 */
	const API_FUNCTION_MISSING="API_FUNCTION_MISSING";
	/**
	 * @var string
	 */
	const API_FUNCTION_UNKNOWN="API_FUNCTION_UNKNOWN";
	/**
	 * @var string
	 */
	const API_FUNCTION_ACCESS_DENIED="API_FUNCTION_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const API_AGENT_MISSING="API_AGENT_MISSING";
	/**
	 * @var string
	 */
	const API_AGENT_NOT_FOUND="API_AGENT_NOT_FOUND";
	/**
	 * @var string
	 */
	const API_AGENT_DEACTIVATED="API_AGENT_DEACTIVATED";
	/**
	 * @var string
	 */
	const API_AGENT_KEY_NOT_MATCH="API_AGENT_KEY_NOT_MATCH";
	/**
	 * @var string
	 */
	const API_CUSTOMER_MISSING="API_CUSTOMER_MISSING";
	/**
	 * @var string
	 */
	const API_CUSTOMER_NOT_FOUND="API_CUSTOMER_NOT_FOUND";
	/**
	 * @var string
	 */
	const API_CUSTOMER_DEACTIVATED="API_CUSTOMER_DEACTIVATED";
	/**
	 * @var string
	 */
	const API_CUSTOMER_KEY_NOT_MATCH="API_CUSTOMER_KEY_NOT_MATCH";
	/**
	 * @var string
	 */
	const API_CUSTOMER_FEATURE_ACCESS_DENIED="API_CUSTOMER_FEATURE_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const API_KEY_MISSING="API_KEY_MISSING";
	/**
	 * @var string
	 */
	const API_KEY_NOT_FOUND="API_KEY_NOT_FOUND";
	/**
	 * @var string
	 */
	const API_KEY_DEACTIVATED="API_KEY_DEACTIVATED";
	/**
	 * @var string
	 */
	const API_KEY_SECRET_NOT_MATCH="API_KEY_SECRET_NOT_MATCH";
	/**
	 * @var string
	 */
	const API_REQUEST_INCOMPLETE="API_REQUEST_INCOMPLETE";
	/**
	 * @var string
	 */
	const API_REQUEST_FAILURE="API_REQUEST_FAILURE";
	/**
	 * @var string
	 */
	const API_REQUEST_VALIDATE="API_REQUEST_VALIDATE";
	/**
	 * @var string
	 */
	const FILE_NOT_FOUND="FILE_NOT_FOUND";
	/**
	 * @var string
	 */
	const FILE_DELETED="FILE_DELETED";
	/**
	 * @var string
	 */
	const FILE_ACCESS_DENIED="FILE_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const FILE_STORAGE_MISSING="FILE_STORAGE_MISSING";
	/**
	 * @var string
	 */
	const FILE_STORAGE_SIZE_MISMATCH="FILE_STORAGE_SIZE_MISMATCH";
	/**
	 * @var string
	 */
	const FILE_STORAGE_READ_ERROR="FILE_STORAGE_READ_ERROR";
	/**
	 * @var string
	 */
	const FILE_EXISTS="FILE_EXISTS";
	/**
	 * @var string
	 */
	const CUSTOMER_DELETED="CUSTOMER_DELETED";
	/**
	 * @var string
	 */
	const CUSTOMER_NOT_CONFIRMED="CUSTOMER_NOT_CONFIRMED";
	/**
	 * @var string
	 */
	const CUSTOMER_BLOCKED="CUSTOMER_BLOCKED";
	/**
	 * @var string
	 */
	const CUSTOMER_INACTIVE="CUSTOMER_INACTIVE";
	/**
	 * @var string
	 */
	const CUSTOMER_WRONG_PASSWORD="CUSTOMER_WRONG_PASSWORD";
	/**
	 * @var string
	 */
	const CUSTOMER_PASSWORD_NOT_MATCH="CUSTOMER_PASSWORD_NOT_MATCH";
	/**
	 * @var string
	 */
	const CUSTOMER_CURRENT_PASSWORD_NOT_MATCH="CUSTOMER_CURRENT_PASSWORD_NOT_MATCH";
	/**
	 * @var string
	 */
	const CUSTOMER_EMAIL_IN_USE="CUSTOMER_EMAIL_IN_USE";
	/**
	 * @var string
	 */
	const CUSTOMER_SOCIAL_IN_USE="CUSTOMER_SOCIAL_IN_USE";
	/**
	 * @var string
	 */
	const FILE_REFERENCE_DUPLICATE="FILE_REFERENCE_DUPLICATE";
	/**
	 * @var string
	 */
	const FILE_STORAGE_COPY="FILE_STORAGE_COPY";
	/**
	 * @var string
	 */
	const FILE_INTEGRITY_FAILURE="FILE_INTEGRITY_FAILURE";
	/**
	 * @var string
	 */
	const FILE_FORMAT_UNSUPPORTED="FILE_FORMAT_UNSUPPORTED";
	/**
	 * @var string
	 */
	const FILE_FORMAT_EXCEPTION="FILE_FORMAT_EXCEPTION";
	/**
	 * @var string
	 */
	const FILE_FORMAT_UNKNOWN="FILE_FORMAT_UNKNOWN";
	/**
	 * @var string
	 */
	const FILE_DOWNLOAD_ERROR="FILE_DOWNLOAD_ERROR";
	/**
	 * @var string
	 */
	const FILE_VALIDATE_ERROR="FILE_VALIDATE_ERROR";
	/**
	 * @var string
	 */
	const FILE_OPEN_ERROR="FILE_OPEN_ERROR";
	/**
	 * @var string
	 */
	const FILE_THUMB_ERROR="FILE_THUMB_ERROR";
	/**
	 * @var string
	 */
	const DATABASE_RECORD_SAVE="DATABASE_RECORD_SAVE";
	/**
	 * @var string
	 */
	const DATABASE_QUERY_EXECUTE="DATABASE_QUERY_EXECUTE";
	/**
	 * @var string
	 */
	const DATABASE_QUERY_RESULT_SAVE="DATABASE_QUERY_RESULT_SAVE";
	/**
	 * @var string
	 */
	const NUMBER_COUNTRY_UNKNOWN="NUMBER_COUNTRY_UNKNOWN";
	/**
	 * @var string
	 */
	const NUMBER_NO_DIALING_RULE="NUMBER_NO_DIALING_RULE";
	/**
	 * @var string
	 */
	const NUMBER_NO_PRICE_RULE="NUMBER_NO_PRICE_RULE";
	/**
	 * @var string
	 */
	const COUNTRY_WRONG_ISO2="COUNTRY_WRONG_ISO2";
	/**
	 * @var string
	 */
	const COUNTRY_NOT_SUPPORTED="COUNTRY_NOT_SUPPORTED";
	/**
	 * @var string
	 */
	const COUNTRY_NO_ROUTE="COUNTRY_NO_ROUTE";
	/**
	 * @var string
	 */
	const EMPTY_RESULT="EMPTY_RESULT";
	/**
	 * @var string
	 */
	const NUMBER_BLOCKED="NUMBER_BLOCKED";
	/**
	 * @var string
	 */
	const NUMBER_UNOBTAINABLE="NUMBER_UNOBTAINABLE";
	/**
	 * @var string
	 */
	const UNALLOCATED_NUMBER="UNALLOCATED_NUMBER";
	/**
	 * @var string
	 */
	const INVALID_NUMBER="INVALID_NUMBER";
	/**
	 * @var string
	 */
	const NUMBER_UNSUPPORTED="NUMBER_UNSUPPORTED";
	/**
	 * @var string
	 */
	const CALL_ABORTED="CALL_ABORTED";
	/**
	 * @var string
	 */
	const CALL_REJECTED="CALL_REJECTED";
	/**
	 * @var string
	 */
	const CALL_PLACE_ERROR="CALL_PLACE_ERROR";
	/**
	 * @var string
	 */
	const CALL_CREATE_ERROR="CALL_CREATE_ERROR";
	/**
	 * @var string
	 */
	const LINE_ATTACH="LINE_ATTACH";
	/**
	 * @var string
	 */
	const LINE_RESET="LINE_RESET";
	/**
	 * @var string
	 */
	const LINE_CAP_FAX="LINE_CAP_FAX";
	/**
	 * @var string
	 */
	const LINE_CAP_VOICE="LINE_CAP_VOICE";
	/**
	 * @var string
	 */
	const LINE_SET_TSID="LINE_SET_TSID";
	/**
	 * @var string
	 */
	const LINE_UNAUTHORIZED="LINE_UNAUTHORIZED";
	/**
	 * @var string
	 */
	const LINE_REQUEST_TIMEOUT="LINE_REQUEST_TIMEOUT";
	/**
	 * @var string
	 */
	const DESTINATION_UNREACHIBLE="DESTINATION_UNREACHIBLE";
	/**
	 * @var string
	 */
	const DIALING_ERROR="DIALING_ERROR";
	/**
	 * @var string
	 */
	const GATEWAY_TIMEOUT="GATEWAY_TIMEOUT";
	/**
	 * @var string
	 */
	const ISDN_NETWORK_FAILURE="ISDN_NETWORK_FAILURE";
	/**
	 * @var string
	 */
	const BUSY="BUSY";
	/**
	 * @var string
	 */
	const NO_ANSWER="NO_ANSWER";
	/**
	 * @var string
	 */
	const NO_DIAL_TONE="NO_DIAL_TONE";
	/**
	 * @var string
	 */
	const RECEIVER_INCOMPATIBLE="RECEIVER_INCOMPATIBLE";
	/**
	 * @var string
	 */
	const TEMPORARILY_UNAVAILABLE="TEMPORARILY_UNAVAILABLE";
	/**
	 * @var string
	 */
	const TRANSMISSION_ABORTED="TRANSMISSION_ABORTED";
	/**
	 * @var string
	 */
	const TRANSMISSION_EARLY_HANGUP="TRANSMISSION_EARLY_HANGUP";
	/**
	 * @var string
	 */
	const TRANSMISSION_ERROR="TRANSMISSION_ERROR";
	/**
	 * @var string
	 */
	const NEGOTIATION_FAILED="NEGOTIATION_FAILED";
	/**
	 * @var string
	 */
	const NOT_FAX_MACHINE="NOT_FAX_MACHINE";
	/**
	 * @var string
	 */
	const VOICE_ANSWER="VOICE_ANSWER";
	/**
	 * @var string
	 */
	const DELIVERY_FAILURE="DELIVERY_FAILURE";
	/**
	 * @var string
	 */
	const MESSAGE_REFERENCE_DUPLICATE="MESSAGE_REFERENCE_DUPLICATE";
	/**
	 * @var string
	 */
	const FAXJOB_NOT_FOUND="FAXJOB_NOT_FOUND";
	/**
	 * @var string
	 */
	const FAXJOB_NOT_FAILED="FAXJOB_NOT_FAILED";
	/**
	 * @var string
	 */
	const FAXJOB_NOT_WAITING="FAXJOB_NOT_WAITING";
	/**
	 * @var string
	 */
	const FAXTRANSPORT_NOT_FOUND="FAXTRANSPORT_NOT_FOUND";
	/**
	 * @var string
	 */
	const FAXTRANSPORT_NOT_WAITING="FAXTRANSPORT_NOT_WAITING";
	/**
	 * @var string
	 */
	const CONTAINER_EXISTS="CONTAINER_EXISTS";
	/**
	 * @var string
	 */
	const CONTAINER_NOT_FOUND="CONTAINER_NOT_FOUND";
	/**
	 * @var string
	 */
	const CONTAINER_DELETED="CONTAINER_DELETED";
	/**
	 * @var string
	 */
	const CONTAINER_ACCESS_DENIED="CONTAINER_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const CONTAINER_DOCUMENT_DUPLICATE="CONTAINER_DOCUMENT_DUPLICATE";
	/**
	 * @var string
	 */
	const CONTAINER_PAGES_LIMIT_EXCEEDED="CONTAINER_PAGES_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const COVER_TEMPLATE_NOT_FOUND="COVER_TEMPLATE_NOT_FOUND";
	/**
	 * @var string
	 */
	const COVER_TEMPLATE_DELETED="COVER_TEMPLATE_DELETED";
	/**
	 * @var string
	 */
	const COVER_TEMPLATE_ACCESS_DENIED="COVER_TEMPLATE_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const FAXPRICE_NOT_FOUND="FAXPRICE_NOT_FOUND";
	/**
	 * @var string
	 */
	const RESUBMIT_FAILED="RESUBMIT_FAILED";
	/**
	 * @var string
	 */
	const DID_NUMBER_LOCKED="DID_NUMBER_LOCKED";
	/**
	 * @var string
	 */
	const DID_SOURCE_NOT_FAXIN="DID_SOURCE_NOT_FAXIN";
	/**
	 * @var string
	 */
	const DID_CUSTOMER_NOT_MATCH="DID_CUSTOMER_NOT_MATCH";
	/**
	 * @var string
	 */
	const DID_WRONG_FAXIN_STATE="DID_WRONG_FAXIN_STATE";
	/**
	 * @var string
	 */
	const DID_GROUP_NOT_CONNECTED="DID_GROUP_NOT_CONNECTED";
	/**
	 * @var string
	 */
	const DID_EXTEND_TOO_EARLY="DID_EXTEND_TOO_EARLY";
	/**
	 * @var string
	 */
	const DID_ORDER_PENDING_ACTIVATION="DID_ORDER_PENDING_ACTIVATION";
	/**
	 * @var string
	 */
	const FILE_PREVIEW_NOT_READY="FILE_PREVIEW_NOT_READY";
	/**
	 * @var string
	 */
	const FILE_CONVERTION_FAILED="FILE_CONVERTION_FAILED";
	/**
	 * @var string
	 */
	const FILE_PAGES_LIMIT_EXCEEDED="FILE_PAGES_LIMIT_EXCEEDED";
	/**
	 * @var string
	 */
	const COMMON_EMAIL_SEND_ERROR="COMMON_EMAIL_SEND_ERROR";
	/**
	 * @var string
	 */
	const QUEUE_TASK_ABORTED="QUEUE_TASK_ABORTED";
	/**
	 * @var string
	 */
	const FILE_TIFF_DEPTH_VALIDATION="FILE_TIFF_DEPTH_VALIDATION";
	/**
	 * @var string
	 */
	const FILE_TIFF_FORMAT_VALIDATION="FILE_TIFF_FORMAT_VALIDATION";
	/**
	 * @var string
	 */
	const FILE_TIFF_QUALITY_VALIDATION="FILE_TIFF_QUALITY_VALIDATION";
	/**
	 * @var string
	 */
	const FILE_TIFF_PAGES_VALIDATION="FILE_TIFF_PAGES_VALIDATION";
	/**
	 * @var string
	 */
	const FILE_TIFF_WIDTH_VALIDATION="FILE_TIFF_WIDTH_VALIDATION";
	/**
	 * @var string
	 */
	const FILE_TIFF_HEIGHT_VALIDATION="FILE_TIFF_HEIGHT_VALIDATION";
	/**
	 * @var string
	 */
	const NUMBER_ADDRESS_NOT_REQUIRED="NUMBER_ADDRESS_NOT_REQUIRED";
	/**
	 * @var string
	 */
	const NUMBER_OUT_OF_STOCK="NUMBER_OUT_OF_STOCK";
	/**
	 * @var string
	 */
	const NUMBER_GROUP_NOT_AVAILABLE="NUMBER_GROUP_NOT_AVAILABLE";
	/**
	 * @var string
	 */
	const NUMBER_ORDER_FAILURE="NUMBER_ORDER_FAILURE";
	/**
	 * @var string
	 */
	const NUMBER_SETUP_FAILURE="NUMBER_SETUP_FAILURE";
	/**
	 * @var string
	 */
	const NUMBER_ADDRESS_FAILURE="NUMBER_ADDRESS_FAILURE";
	/**
	 * @var string
	 */
	const NUMBER_PROVIDER_NOT_RECOGNIZED="NUMBER_PROVIDER_NOT_RECOGNIZED";
	/**
	 * @var string
	 */
	const SESSION_TOKEN_MISMATCH="SESSION_TOKEN_MISMATCH";
	/**
	 * @var string
	 */
	const SESSION_NOT_FOUND="SESSION_NOT_FOUND";
	/**
	 * @var string
	 */
	const SESSION_EXPIRED="SESSION_EXPIRED";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_NOT_FOUND="CONFIRM_TOKEN_NOT_FOUND";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_TYPE_MISMATCH="CONFIRM_TOKEN_TYPE_MISMATCH";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_SOURCE_MISMATCH="CONFIRM_TOKEN_SOURCE_MISMATCH";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_USER_MISMATCH="CONFIRM_TOKEN_USER_MISMATCH";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_EXPIRED="CONFIRM_TOKEN_EXPIRED";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_VALIDATED="CONFIRM_TOKEN_VALIDATED";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_INVALIDATED="CONFIRM_TOKEN_INVALIDATED";
	/**
	 * @var string
	 */
	const CONFIRM_TOKEN_CLOSED="CONFIRM_TOKEN_CLOSED";
	/**
	 * @var string
	 */
	const SEND_SMS_FREQUENCY_EXCEEDED="SEND_SMS_FREQUENCY_EXCEEDED";
	/**
	 * @var string
	 */
	const CONTACT_GROUP_IN_USE="CONTACT_GROUP_IN_USE";
	/**
	 * @var string
	 */
	const CONTACT_GROUP_NOT_FOUND="CONTACT_GROUP_NOT_FOUND";
	/**
	 * @var string
	 */
	const CONTACT_GROUP_ACCESS_DENIED="CONTACT_GROUP_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const CONTACT_ITEM_NOT_FOUND="CONTACT_ITEM_NOT_FOUND";
	/**
	 * @var string
	 */
	const CONTACT_ITEM_ACCESS_DENIED="CONTACT_ITEM_ACCESS_DENIED";
	/**
	 * @var string
	 */
	const CONTACT_NUMBER_IN_USE="CONTACT_NUMBER_IN_USE";
	/**
	 * @var string
	 */
	const NUMBER_ITEM_EXISTS="NUMBER_ITEM_EXISTS";
	/**
	 * @var string
	 */
	const STORAGE_ALREADY_CONNECTED="STORAGE_ALREADY_CONNECTED";
	/**
	 * @var string
	 */
	const STORAGE_REVOKE_FAILURE="STORAGE_REVOKE_FAILURE";
	/**
	 * @var string
	 */
	const STORAGE_NOT_CONNECTED="STORAGE_NOT_CONNECTED";
	/**
	 * @var string
	 */
	const STORAGE_NOT_FOUND="STORAGE_NOT_FOUND";
	/**
	 * @var string
	 */
	const INSUFFICIENT_FUNDS="INSUFFICIENT_FUNDS";
}