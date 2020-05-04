<?php 

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$appKey = 'XBnKaywRCrj05m-XXX-v6DXuZ3FFkUgiw45';

$client = new Client();
try {
	$res = $client->request('POST', 'https://api.abc.com/v1/apps/'.$appKey.'/reviews?utoken=', [
	// $res = $client->request('GET', 'https://api.tripoto.com/1.0/lists/home/items?limit=1000', [
	    'auth' => ['user', 'pass']
	]);

	$body = $res->getBody();
	while (!$body->eof()) {
	    echo $body->read(1024);
	}

} catch (Exception $e){
	print_r($e->getMessage());
}

 ?>