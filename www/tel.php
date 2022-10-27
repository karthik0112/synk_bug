<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append(new http\QueryString(array(
  'token' => 'hmvhchzb5rqc2kqa',
  'to' => '+919500901528',
  'body' => 'WhatsApp API on UltraMsg.com works good',
  'priority' => '1',
  'referenceId' => ''
)));

$request->setRequestUrl('https://api.ultramsg.com/instance20663/messages/chat');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  'content-type' => 'application/x-www-form-urlencoded'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
