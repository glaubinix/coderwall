<?php

namespace Glaubinix\Coderwall\Client;

class Response {

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * @var string
	 */
	protected $http_code;

	/**
	 * @var mixed
	 */
	protected $response;

	/**
	 * @param string $url
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param string $http_code
	 */
	public function setHttpCode($http_code) {
		$this->http_code = $http_code;
	}

	/**
	 * @return string
	 */
	public function getHttpCode() {
		return $this->http_code;
	}

	/**
	 * @param string $response
	 */
	public function setResponse($response) {
		$this->response = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '',$response), true);
	}

	/**
	 * @return mixed
	 */
	public function getResponse() {
		return $this->response;
	}

}
