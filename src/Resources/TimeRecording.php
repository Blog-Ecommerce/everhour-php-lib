<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;

/**
 * Class TimeRecording
 * @package EverHour\Resources
 *
 * @property Client $client
 */
class TimeRecording {
  /**
   * Projects constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @param $task
   * @param array $params
   * @return array|mixed|object
   */
  public function updateInTask($task, array $params = []) {
    $path = sprintf("/tasks/%s/time", $task);
    return $this->client->put($path, $params);
  }
}
