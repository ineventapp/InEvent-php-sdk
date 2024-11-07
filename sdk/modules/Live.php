<?php
namespace InEvent;

class Live {
	public static function createRoom($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "createRoom", $attributes);
		return $json;
	}
	public static function authRoom($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "authRoom", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "edit", $attributes);
		return $json;
	}
	public static function remove($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "remove", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "find", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "get", $attributes);
		return $json;
	}
	public static function leave($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "leave", $attributes);
		return $json;
	}
	public static function startRecording($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "startRecording", $attributes);
		return $json;
	}
	public static function updateRecording($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "updateRecording", $attributes);
		return $json;
	}
	public static function updateRecordingVideoConferencing($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "updateRecordingVideoConferencing", $attributes);
		return $json;
	}
	public static function createSimulcast($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "createSimulcast", $attributes);
		return $json;
	}
	public static function findSimulcasts($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "findSimulcasts", $attributes);
		return $json;
	}
	public static function removeSimulcast($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "removeSimulcast", $attributes);
		return $json;
	}
	public static function startLiveStreaming($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "startLiveStreaming", $attributes);
		return $json;
	}
	public static function reloadLiveStreaming($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "reloadLiveStreaming", $attributes);
		return $json;
	}
	public static function isLiveStreaming($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "isLiveStreaming", $attributes);
		return $json;
	}
	public static function stopLiveStreaming($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "stopLiveStreaming", $attributes);
		return $json;
	}
	public static function updateLiveStreaming($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "updateLiveStreaming", $attributes);
		return $json;
	}
	public static function findTranscriptions($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "findTranscriptions", $attributes);
		return $json;
	}
	public static function removeTranscriptions($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "removeTranscriptions", $attributes);
		return $json;
	}
	public static function enableMuxLowLatency($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "enableMuxLowLatency", $attributes);
		return $json;
	}
	public static function disableMuxLowLatency($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "disableMuxLowLatency", $attributes);
		return $json;
	}
	public static function enableIvs($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "enableIvs", $attributes);
		return $json;
	}
	public static function disableIvs($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "disableIvs", $attributes);
		return $json;
	}
	public static function analyticsFind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "analyticsFind", $attributes);
		return $json;
	}
	public static function analyticsGet($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "analyticsGet", $attributes);
		return $json;
	}
	public static function checkOnDemandReady($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "checkOnDemandReady", $attributes);
		return $json;
	}
	public static function clearAnalytics($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "clearAnalytics", $attributes);
		return $json;
	}
	public static function sendSipTTS($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "sendSipTTS", $attributes);
		return $json;
	}
	public static function closeSip($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "closeSip", $attributes);
		return $json;
	}
	public static function dialOutSip($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "dialOutSip", $attributes);
		return $json;
	}
	public static function closeOpentokConnection($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "closeOpentokConnection", $attributes);
		return $json;
	}
	public static function enableCC($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "enableCC", $attributes);
		return $json;
	}
	public static function disableCC($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live", "disableCC", $attributes);
		return $json;
	}
}
?>