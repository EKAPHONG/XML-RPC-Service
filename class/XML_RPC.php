<?php
namespace EKAPHONG;
class XML_RPC {
	public function getEncrypt($server, $app_id, $secret, $plaintext) {
		{
			$request = xmlrpc_encode_request("getEncrypt", array($app_id, $secret, $plaintext));
			$context = stream_context_create(array('http' => array(
				'method' => "POST",
				'header' => "Content-Type: text/xml",
				'content' => $request
			)));
			$file = file_get_contents($server, false, $context);
			$response = xmlrpc_decode($file);
			return $response;
		}
	}

	public function getDecrypt($server, $app_id, $secret, $ciphertext) {
		{
			$request = xmlrpc_encode_request("getDecrypt", array($app_id, $secret, $ciphertext));
			$context = stream_context_create(array('http' => array(
				'method' => "POST",
				'header' => "Content-Type: text/xml",
				'content' => $request
			)));
			$file = file_get_contents($server, false, $context);
			$response = xmlrpc_decode($file);
			return $response;
		}
	}

	public function getUser($server, $app_id, $secret, $uid) {
		{
			$request = xmlrpc_encode_request("getUser", array($app_id, $secret, $uid));
			$context = stream_context_create(array('http' => array(
				'method' => "POST",
				'header' => "Content-Type: text/xml",
				'content' => $request
			)));
			$file = file_get_contents($server, false, $context);
			$response = xmlrpc_decode($file);
			return $response;
		}
	}

	public function getOid($server, $app_id, $secret, $uid) {
		{
			$request = xmlrpc_encode_request("getOid", array($app_id, $secret, $uid));
			$context = stream_context_create(array('http' => array(
				'method' => "POST",
				'header' => "Content-Type: text/xml",
				'content' => $request
			)));
			$file = file_get_contents($server, false, $context);
			$response = xmlrpc_decode($file);
			return $response;
		}
	}

	public function getUserByOid($server, $app_id, $secret, $oid) {
		{
			$request = xmlrpc_encode_request("getUserByOid", array($app_id, $secret, $oid));
			$context = stream_context_create(array('http' => array(
				'method' => "POST",
				'header' => "Content-Type: text/xml",
				'content' => $request
			)));
			$file = file_get_contents($server, false, $context);
			$response = xmlrpc_decode($file);
			return $response;
		}
	}
}
