<?php

namespace CapsuleB\EverHour;

use CapsuleB\EverHour\Resources\Clients;
use CapsuleB\EverHour\Resources\Expenses;
use CapsuleB\EverHour\Resources\Invoices;
use CapsuleB\EverHour\Resources\Projects;
use CapsuleB\EverHour\Resources\Reports;
use CapsuleB\EverHour\Resources\Schedule;
use CapsuleB\EverHour\Resources\Tasks;
use CapsuleB\EverHour\Resources\Timecards;
use CapsuleB\EverHour\Resources\TimeRecorders;
use CapsuleB\EverHour\Resources\Timers;
use CapsuleB\EverHour\Resources\Users;
use CapsuleB\EverHour\Resources\Webhooks;
use Exception;

/**
 * Class Client
 * @package CapsuleB\EverHour
 *
 * @property $apiKey
 * @property $curlClient
 *
 * @property Clients        $clients
 * @property Expenses       $expenses
 * @property Invoices       $invoices
 * @property Projects       $projects
 * @property Reports        $reports
 * @property Schedule       $schedule
 * @property Tasks          $tasks
 * @property Timecards      $timecards
 * @property TimeRecorders  $timeRecorders
 * @property Timers         $timers
 * @property Users          $users
 * @property Webhooks       $webhooks
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

    // Init the Resources
    $this->clients        = new Clients($this);
    $this->expenses       = new Expenses($this);
    $this->invoices       = new Invoices($this);
    $this->projects       = new Projects($this);
    $this->reports        = new Reports($this);
    $this->schedule       = new Schedule($this);
    $this->tasks          = new Tasks($this);
    $this->timecards      = new Timecards($this);
    $this->timeRecorders  = new TimeRecorders($this);
    $this->timers         = new Timers($this);
    $this->users          = new Users($this);
    $this->webhooks       = new Webhooks($this);
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
