byFax public API SDK for PHP. SOAP rpc/encoded.

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
