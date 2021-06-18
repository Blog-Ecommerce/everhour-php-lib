<?php

namespace CapsuleB\EverHour;

use CapsuleB\EverHour\Resources\Projects;
use CapsuleB\EverHour\Resources\Tasks;
use CapsuleB\EverHour\Resources\TimeRecording;
use CapsuleB\EverHour\Resources\Users;
use Exception;

/**
 * Class Client
 * @package Everhour
 *
 * @property $curlClient
 * @property $apiKey
 * @property $projects
 * @property $users
 * @property $tasks
 * @property $timeRecording
 */
class Client {

  const BASE_URL = 'https://api.everhour.com';

  /**
   * Client constructor.
   * @param $apiKey
   */
  public function __construct($apiKey) {
    $this->curlClient     = curl_init();
    $this->apiKey         = $apiKey;
    $this->projects       = new Projects($this);
    $this->users          = new Users($this);
    $this->tasks          = new Tasks($this);
    $this->timeRecording  = new TimeRecording($this);
  }

  /**
   * @param $method
   * @param $path
   * @param array $params
   * @return array|Exception|mixed|object
   */
  public function request($method, $path, array $params = []) {
    // Reset any previous request
    $this->curlClient = curl_init();

    // Set the request params
    curl_setopt($this->curlClient, CURLOPT_URL, $this::BASE_URL . $path);
    curl_setopt($this->curlClient, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($this->curlClient, CURLOPT_HEADER, FALSE);
    curl_setopt($this->curlClient, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($this->curlClient, CURLOPT_HTTPHEADER, [
      'Content-Type: application/json',
      'X-Api-Key:' . $this->apiKey
    ]);

    // Add params if any
    if (!empty($params)) {
      curl_setopt($this->curlClient, CURLOPT_POSTFIELDS, json_encode($params));
    }

    // Does the request
    $response = json_decode(curl_exec($this->curlClient));
    $httpcode = curl_getinfo($this->curlClient, CURLINFO_HTTP_CODE);
    curl_close($this->curlClient);

    // Return the response
    if ($httpcode == 200 || $httpcode == 201) {
      return $response;
    } else {
      return new Exception($response->message);
    }
  }

  /**
   * @param $path
   * @return array|mixed|object
   */
  public function get($path) {
    return $this->request('GET', $path);
  }

  /**
   * @param $path
   * @param array $params
   * @return array|mixed|object
   */
  public function post($path, array $params = []) {
    return $this->request('POST', $path, $params);
  }

  /**
   * @param $path
   * @param array $params
   * @return array|mixed|object
   */
  public function put($path, array $params = []) {
    return $this->request('PUT', $path, $params);
  }

  /**
   * @param $path
   * @return array|mixed|object
   */
  public function delete($path) {
    return $this->request('DELETE', $path);
  }
}
