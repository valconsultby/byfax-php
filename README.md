PRODUCT
-------------------

byFax is an online faxing platform that allows you to send and receive faxes without fax machines or any other devices directly in your browser or through the API integration presented here.
More information about the platform and its abilities can be found on the <a href="https://byfax.by">byFax</a> website (https://byfax.by).

DIRECTORY STRUCTURE
-------------------

      enum/          contains enumerations
      model/         contains data models (entities, requests, responses)
      samples/       contains sample scripts


REQUIREMENTS
------------

The minimum requirement by this project that your Web server supports PHP 7.0.0.


SERVICES
------------

To get started with the API, you need to create a byFax application and get the api-key and api-secret to authorize your application to the API.
As you implement your solution, you have a fully functional test environment at https://sandbox.byfax.biz
When your solution is complete, the base url for services changes to the production environment to https://api.byfax.biz
See the services list below.

- cover - cover page management. <a href="https://api.byfax.biz/soap/1.1/cover" targe='__blank'>[Detailed description and WSDL link]</a>
- document - fax documents cache management. <a href="https://api.byfax.biz/soap/1.1/document" targe='__blank'>[Detailed description and WSDL link]</a>
- faxout - sending fax and monitoring delivery status and downloading faxes as PDF files. <a href="https://api.byfax.biz/faxout" targe='__blank'>[Detailed description and WSDL link]</a>
- faxin/message - obtain list of received faxes and downloading as PDF files. <a href="https://api.byfax.biz/soap/1.1/faxin/message" targe='__blank'>[Detailed description and WSDL link]</a>
- faxin/inventory - receiving data about assigned virtual fax-numbers. <a href="https://api.byfax.biz/soap/1.1/faxin/inventory" targe='__blank'>[Detailed description and WSDL link]</a>


SAMPLES
------------

## Authorization
The application is authorized to the API using a special SOAP header that contains api-key and api-secret. The header is represented by a UsernameToken object.

The authorization header is passed in every request, the connection to the API has no sessions and no additional tokens.

```php
$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with https://api.byfax.biz for production

// Create "document " API service and pass API key-secret and url data
$serviceDoc = new \byfax\ApiServiceDocumentSoapClient($apiKey, $apiSecret, $apiUrl);
```

## Cover pages. List
Cover Pages are available for more personalized faxing in byFax. The system has already been loaded with a basic set of cover pages, which are available via API as well as in the byFax customer portal.

Both portal users and API developers in their applications have the ability to add own custom cover pages. The cover page is a DocX file with predefined placeholders that are replaced with the sender and recipient data during the sending process.

```php
$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with https://api.byfax.biz for production

// Create "cover" API service and pass API key-secret and url data
$serviceCover = new \byfax\ApiServiceCoverSoapClient($apiKey, $apiSecret, $apiUrl);

// call "listCovers" function and obtain response
$response = $serviceCover->listCovers();

// Check response state code for success and return false if failed
if ($response->stateCode != StateCodes::SUCCESS)
      return false;
```      

## Cover pages. Add new
To add a cover page, you should upload a DocX file to the system and setup its name.

```php
$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with https://api.byfax.biz for production

// Create "cover" API service and pass API key-secret and url data
$serviceCover = new \byfax\ApiServiceCoverSoapClient($apiKey, $apiSecret, $apiUrl);

$filename = "/path/to/user/cover.docx";

// Create and fill FaxFile object
$coverDoc = new \byfax\model\entity\common\FaxFile();
$coverDoc->fileSize = filesize($filename);
$coverDoc->fileCheck = md5_file($filename);
$coverDoc->fileName = basename($filename);
$coverDoc->fileMime = mime_content_type($filename);
$coverDoc->fileData = file_get_contents($filename); // Read file data without encoding to Base64

// Call Api function "addCover" to upload a new cover page
$response = $serviceCover->addCover("Test cover name", $coverDoc);

// Check response state code for success and return false if failed
if ($response->stateCode != StateCodes::SUCCESS)
      return false;

// Store newly created cover page refID
$coverReference = response->objectRef;
```

## Preloading a document
In case the same file must be sent several times or to many recipients, the system provides the ability to upload a document and save it for further reuse.

```php
$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with https://api.byfax.biz for production

// Create "document " API service and pass API key-secret and url data
$serviceDoc = new \byfax\ApiServiceDocumentSoapClient($apiKey, $apiSecret, $apiUrl);

$filename = "/path/to/user/file.pdf";

// Create and fill FaxDocument object
$uploadDoc = new \byfax\model\entity\common\FaxDocument();
$uploadDoc->documentFile = new \byfax\model\entity\common\FaxFile();

$uploadDoc->documentFile->fileSize = filesize($filename);
$uploadDoc->documentFile->fileCheck = md5_file($filename);
$uploadDoc->documentFile->fileName = basename($filename);
$uploadDoc->documentFile->fileMime = mime_content_type($filename);
$uploadDoc->documentFile->fileData = file_get_contents($filename); // Read file data without encoding to Base64

// Call Api function "uploadDocument" to upload a document to cache
$response = $serviceDoc->uploadDocument($uploadDoc);

// Check response state code for success and return false if failed
if ($response->stateCode != StateCodes::SUCCESS)
      return false;

// Store uploaded document refID for firther use
$uploadedRef = $response->fileRef;
```

## Sending a fax (common submission way)
The system provides many options to pass to send fax request - loading documents directly within the request, using previously uploaded documents, using a cover page, submit fax in high or standard quality, submit fax in text or photo mode, submit fax for one or more documents in the request, submit fax for one or more recipients, setting your own fax header format, setting the number of retries in case the number is busy, etc. Below there is an example of using the most common options.

```php
$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with https://api.byfax.biz for production

// Create "faxout" API service and pass API key-secret and url data
$serviceFax = new \byfax\ApiServiceFaxoutSoapClient($apiKey, $apiSecret, $apiUrl);

// Crate and fill fax submission request data
$submitRequest = new \byfax\model\request\faxout\ApiRequestFaxjobSubmit();

// Submission broadcast refID.
// Unique within your API account
// Should be unique for each submission
// Uncomment this line to set at your side otherwise API will generate.
// $submitRequest->broadcastRef = md5("my-broadcast-ref" . microtime(true));

// Fax header format template
$submitRequest->Header = "<DateTime> <Timezone>|From: <From> To: <To>|Page <CurPage>of <CurPages>";

// Sender timezone
$submitRequest->Timezone = "Europe/Minsk";

// Number of reties in case of Busy or NoAnswer
$submitRequest->busyRetry = 3;

// Send quality. Available options are STANDARD or FINE. See the enumeration
$submitRequest->sendQuality = \byfax\enum\FaxQuality::FINE;

// Send mode. Available options are TEXT or PHOTO. See the enumeration
$submitRequest->sendMode = \byfax\enum\FaxMode::TEXT;

// Cover page if needed to add to fax, skip otherwise. Use listCovers to obtain a cover RefID.
$submitRequest->Cover = new \byfax\model\entity\cover\FaxCover();
$submitRequest->Cover->coverRef = "COVER_PAGE_REF_ID";

// Sender identification. At least one of properties is required
$submitRequest->Sender = new \byfax\model\entity\common\FaxContact();
$submitRequest->Sender->Name = "My sender name";
$submitRequest->Sender->Company = "My sender company";
$submitRequest->Sender->Number = "+375 99 111111111";

// Recipient object. Number and Name/Company are required.
$submitRecipient = new \byfax\model\entity\common\FaxRecipient();
// Unique message reference-ID. 
// Uncomment this line to set at your side otherwise API will generate.
// $submitRecipient->messageRef = md5("my-message-ref" . microtime(true));  
$submitRecipient->Name = "Recipient name";
$submitRecipient->Company = "Recipient company";
$submitRecipient->Number = "+375 99 111111122";

// Push recipient object to array and create another if it is a batch job
$submitRequest->Recipients[] = $submitRecipient;

// Document object with previously uploaded file.
$submitDoc = new \byfax\model\entity\common\FaxDocument();
$submitDoc->documentRef = $uploadedRef;

// Push document object into the array. Add another one if needed.
$submitRequest->Documents[] = $submitDoc;

$filename = "/path/to/user/file.pdf";

// Document object with a file to upload within exact fax submission.
$submitDoc = new \byfax\model\entity\common\FaxDocument();
$submitDoc->documentFile = new \app\components\byfax\model\entity\common\FaxFile();
$submitDoc->documentFile->fileSize = filesize($filePath);
$submitDoc->documentFile->fileCheck = md5_file($filePath);
$submitDoc->documentFile->fileName = basename($filePath);
$submitDoc->documentFile->fileMime = mime_content_type($filePath);
$submitDoc->documentFile->fileData = file_get_contents($filePath);

// Push document object into the array.
$submitRequest->Documents[] = $submitDoc;

// Call "Submit" API function to push fax into the queue
$response = $serviceFax->Submit($submitRequest);

// Check response state code for success and return false if failed
if ($response->stateCode != StateCodes::SUCCESS)
      return false;

// Create and fill check-state request for a single recipient
$checkRequest = new \byfax\model\request\faxout\ApiRequestFaxjobListMessages();
$checkRequest->messageRefs[] = $response->reportRecipients[0]->messageRef;

// Add and fill pagination data
$checkRequest->pagination = new \byfax\model\entity\common\ListPagination();
$checkRequest->pagination->pageNumber = 0;
$checkRequest->pagination->pageSize = 10;

// Call "listRecipients" API function to obtain recipients status
$checkResponse = $serviceFaxout->listRecipients($checkRequest);

// Check response state code for success and return false if failed
if ($checkResponse->stateCode != StateCodes::SUCCESS)
return false;

// Obtain and store recipient status
$recipientStatus = $checkResponse->Messages[0]->jobState;
```

## Sending a fax (prepared TIFF submission)
This method was specifically designed to send a prepared TIFF file to a single recipient. The method is used only if the TIFF file is prepared on the application`s side and it must be sent without going through the byFax document preparation system. Using this method application should pass only the following data, sender details (Sender object), recipient details (Recipient object), the unique identifier of the container (broadcastRef parameter) and the prepared TIFF file (document object). The full text of the fax header could also be passed to be placed at the top of the page. If the header is already placed to all pages of the document, then the header parameter is passed as empty string. Here is an example of using this function.

```php
$apiKey = "YOUR-API-KEY";
$apiSecret = "YOUR-API-SECRET";
$apiUrl = "https://sandbox.byfax.biz"; // Replace with https://api.byfax.biz for production

// Create "faxout" API service and pass API key-secret and url data
$serviceFax = new \byfax\ApiServiceFaxoutSoapClient($apiKey, $apiSecret, $apiUrl);

// Crate and fill fax submission request data
$submitRequest = new \byfax\model\request\faxout\ApiRequestFaxjobMessage();

// Submission broadcast refID.
// Unique within your API account
// Should be unique for each submission
// Uncomment this line to set at your side otherwise API will generate.
// $submitRequest->broadcastRef = md5("my-broadcast-ref" . microtime(true));

// Submission message refID.
// Unique within your API account
// Should be unique for each recipient withn the entire account
// Uncomment this line to set at your side otherwise API will generate.
// $submitRequest->messageRef = md5("my-message-ref" . microtime(true));

// Fax header format template
$submitRequest->Header = "<DateTime> <Timezone>|From: <From> To: <To>|Page <CurPage>of <CurPages>";

// Sender timezone
$submitRequest->Timezone = "Europe/Minsk";

// Number of reties in case of Busy or NoAnswer
$submitRequest->busyRetry = 3;

// Sender identification. At least one of properties is required
$submitRequest->Sender = new \byfax\model\entity\common\FaxContact();
$submitRequest->Sender->Name = "My sender name";
$submitRequest->Sender->Company = "My sender company";
$submitRequest->Sender->Number = "+375 99 111111111";

// Recipient object. Number and Name/Company are required.
$submitRequest->Recipient = new \byfax\model\entity\common\FaxContact();
$submitRequest->Recipient->Name = "Recipient name";
$submitRequest->Recipient->Company = "Recipient company";
$submitRequest->Recipient->Number = "+375 99 111111122";

$filename = "/path/to/user/file.pdf";

// Document object with a file to upload within exact fax submission.
$submitRequest->Document = new \byfax\model\entity\common\FaxDocument();
$submitRequest->Document->documentFile = new \app\components\byfax\model\entity\common\FaxFile();
$submitRequest->Document->documentFile->fileSize = filesize($filePath);
$submitRequest->Document->documentFile->fileCheck = md5_file($filePath);
$submitRequest->Document->documentFile->fileName = basename($filePath);
$submitRequest->Document->documentFile->fileMime = mime_content_type($filePath);
$submitRequest->Document->documentFile->fileData = file_get_contents($filePath);


// Call "SubmitMessage" API function to push fax into the queue
$response = $serviceFax->SubmitMessage($submitRequest);

// Check response state code for success and return false if failed
if ($response->stateCode != StateCodes::SUCCESS)
      return false;


// Create and fill check-state request for a single recipient
$checkRequest = new \byfax\model\request\faxout\ApiRequestFaxjobListMessages();
$checkRequest->messageRefs[] = $response->reportRecipients[0]->messageRef;

// Add and fill pagination data
$checkRequest->pagination = new \byfax\model\entity\common\ListPagination();
$checkRequest->pagination->pageNumber = 0;
$checkRequest->pagination->pageSize = 10;

// Call "listRecipients" API function to obtain recipients status
$checkResponse = $serviceFaxout->listRecipients($checkRequest);

// Check response state code for success and return false if failed
if ($checkResponse->stateCode != StateCodes::SUCCESS)
return false;

// Obtain and store recipient status
$recipientStatus = $checkResponse->Messages[0]->jobState;
```


Still have questions?
------------

If you still have any questions, or the samples above are not informative enough, you are able get more detailed information about API functions, objects and enumerations in the detailed description of each service (links can be found above), you can also contact us via helpdesk or JivoSite. We are always glad to hear suggestions and ideas for expanding or improving both the byFax API and our entire product.

At the moment, only the basic functionality of the byFax portal is available in our open API, if you need to expand the capabilities or add fundamentally new functions, we are always happy to discuss.

If you are a Java, Ruby, Go or other programming language developer and would like to help improving the byFax API SDK, we will be glad to have your help developing SDKs in other languages.
