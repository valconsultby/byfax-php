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
$serviceDoc = new \byfax\ApiServiceDocumentSoapClient($apiKey, $apiSecret, $apiUrl);

// Create api-request object and fill it
$uploadDoc = new \byfax\model\entity\common\FaxDocument();
$uploadDoc->documentFile = new \byfax\model\entity\common\FaxFile();
$uploadDoc->documentFile->fileSize = filesize($filePath);
$uploadDoc->documentFile->fileCheck = md5_file($filePath);
$uploadDoc->documentFile->fileName = basename($filePath);
$uploadDoc->documentFile->fileMime = mime_content_type($filePath);
$uploadDoc->documentFile->fileData = file_get_contents($filePath);

// Call API function and obtain response
$apiRes = $serviceDoc->uploadDocument($uploadDoc);

// Get uploaded document REF-ID for further processing
$uploadedRef = $apiRes->fileRef;