<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Projects
 * @package CapsuleB\EverHour\Resources
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
  public function getAll() {
    return $this->client->get('/projects');
  }

  /**
   * @param $project string
   * @return array|mixed|object
   */
  public function get(string $project) {
    $path = sprintf("/projects/%s", $project);
    return $this->client->get($path);
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
  public function update($project) {
    $path = sprintf("/projects/%s", $project);
    return $this->client->put($path);
  }

  /**
   * @throws Exception
   */
  public function updateBillingBudget() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function delete() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getAllSections() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getSection() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function createSection() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateSection() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteSection() {
    throw new Exception('Not implemented');
  }

}
