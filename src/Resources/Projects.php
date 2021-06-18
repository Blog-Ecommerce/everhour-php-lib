<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;

/**
 * Class Projects
 * @package EverHour\Resources
 *
 * @property Client $client
 */
class Projects {
  /**
   * Projects constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @return array|mixed|object
   */
  public function findAll() {
    return $this->client->get('/projects');
  }

  /**
   * @return array|mixed|object
   */
  public function create() {
    return $this->client->post('/projects');
  }

  /**
   * @param $project
   * @return array|mixed|object
   */
  public function findById($project) {
    $path = sprintf("/projects/%s", $project);
    return $this->client->get($path);
  }

  /**
   * @param $project
   * @return array|mixed|object
   */
  public function update($project) {
    $path = sprintf("/projects/%s", $project);
    return $this->client->put($path);
  }

  /**
   * @param $project
   * @return array|mixed|object
   */
  public function delete($project) {
    $path = sprintf("/projects/%s", $project);
    return $this->client->delete($path);
  }
}
