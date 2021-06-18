<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;

/**
 * Class Tasks
 * @package EverHour\Resources
 *
 * @property Client $client
 */
class Tasks {
  /**
   * Projects constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @param $project
   * @return array|mixed|object
   */
  public function findByProject($project) {
    $path = sprintf("/projects/%s/tasks", $project);
    return $this->client->get($path);
  }

  /**
   * @param $task
   * @return array|mixed|object
   */
  public function findById($task) {
    $path = sprintf("/tasks/%s", $task);
    return $this->client->get($path);
  }

  /**
   * @param $task
   * @param array $params
   * @return array|mixed|object
   */
  public function update($task, array $params = []) {
    $path = sprintf("/tasks/%s", $task);
    return $this->client->put($path, $params);
  }
}
