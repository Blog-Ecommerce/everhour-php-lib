<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class TimeRecorders
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class TimeRecorders {
  /**
   * TimeRecorders constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function getAll() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getAllByUser() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getAllByTask() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function addTime() {
    throw new Exception('Not implemented');
  }

  public function update($task, array $params = []) {
    $path = sprintf("/tasks/%s/time", $task);
    return $this->client->put($path, $params);
  }

  /**
   * @throws Exception
   */
  public function delete() {
    throw new Exception('Not implemented');
  }

}
