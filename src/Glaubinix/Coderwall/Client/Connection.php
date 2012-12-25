<?php

namespace Glaubinix\Coderwall\Client;

class Connection {

	const BASE_URL = 'https://coderwall.com/';

	public function get($query) {
		$url = self::BASE_URL . $query . '.json';

		$options = array(
			CURLOPT_RETURNTRANSFER => true,     // return web page
			CURLOPT_HEADER         => true,    // don't return headers
			CURLOPT_USERAGENT      => "Coderwall API Client", // who am i
			CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect
			CURLOPT_TIMEOUT        => 120,      // timeout on response
			CURLOPT_HEADER => 0
		);

		$ch = curl_init( $url );
		curl_setopt_array( $ch, $options );
		$content = curl_exec( $ch );
		$header  = curl_getinfo( $ch );
		curl_close( $ch );

		$response = new Response();
		$response->setHttpCode($header['http_code']);
		$response->setResponse($content);

		return $response;
	}

}
