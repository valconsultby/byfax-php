<?php

// Sample autoload function for stand-alone SDK sample
function __autoload($class)
{
    $path = __DIR__ . DIRECTORY_SEPARATOR . str_ireplace("\\", DIRECTORY_SEPARATOR, $class) . '.php';
    require $path;
}

$filePath = __DIR__  . "/test-file/byFax img 1.png";

$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with "https://api.byfax.biz" for PRODUCTION

// Create API service and pass API key-secret data (URL is default, may be set)
$serviceFaxout = new \byfax\ApiServiceFaxoutSoapClient($apiKey, $apiSecret, $apiUrl);

// Create api-request object and fill it
$submitRequest = new \byfax\model\request\faxout\ApiRequestFaxjobSubmit();

//$submitRequest->broadcastRef = md5("my-broadcast-ref" . microtime(true)); // Unique broadcast reference-ID. Uncomment this line to set at your side otherwise API will generate.
$submitRequest->Header = "<DateTime> <Timezone>|От: <From> Кому: <To>|Страница <CurPage> из <CurPages>";
$submitRequest->busyRetry = 3;
$submitRequest->sendQuality = \byfax\enum\FaxQuality::STANDARD; // Available STANDARD and FINE
$submitRequest->sendMode = \byfax\enum\FaxMode::PHOTO;

// Sender object is required. At least one fields should be set
$submitRequest->Sender = new \byfax\model\entity\common\FaxContact();
$submitRequest->Sender->Name = "My sender name";
$submitRequest->Sender->Company = "My sender company";
$submitRequest->Sender->Number = "+375 29 1111111";
$submitRequest->Sender->Timezone = "Europe/Minsk";

// Recipient object is required. Number should be always set in E164 format
$submitRecipient = new \byfax\model\entity\common\FaxRecipient();
//$submitRecipient->messageRef = md5("my-message-ref" . microtime(true));  // Unique message reference-ID. Uncomment this line to set at your side otherwise API will generate.
$submitRecipient->Name = "Recipient name";
$submitRecipient->Number = "+375173361209";

$submitRequest->Recipients[] = $submitRecipient;

// Document can be uploaded in-place or previously uploaded may be used (see the appropriate sample)
$submitDoc = new \byfax\model\entity\common\FaxDocument();
$submitDoc->documentFile = new \byfax\model\entity\common\FaxFile();
$submitDoc->documentFile->fileSize = filesize($filePath);
$submitDoc->documentFile->fileCheck = md5_file($filePath);
$submitDoc->documentFile->fileName = basename($filePath);
$submitDoc->documentFile->fileMime = mime_content_type($filePath);
$submitDoc->documentFile->fileData = file_get_contents($filePath);

$submitRequest->Documents[] = $submitDoc;

// Call API function and obtain response
$apiRes = $serviceFaxout->Submit($submitRequest);


// Create check-state request object and fill it
$checkRequest = new \byfax\model\request\faxout\ApiRequestFaxjobListMessages();
$checkRequest->messageRefs[] = $apiRes->reportRecipients[0]->messageRef;
$checkRequest->pagination = new \byfax\model\entity\common\ListPagination();
$checkRequest->pagination->pageNumber = 0;
$checkRequest->pagination->pageSize = 10;

// Call API function and obtain response
$checkRes = $serviceFaxout->listRecipients($checkRequest);

// Recipient state (StateRecipient enum value)
$recStatus = $checkRes->Messages[0]->jobState;