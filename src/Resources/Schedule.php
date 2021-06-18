<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Schedule
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Schedule {

  const BASE_URL = 'clients';

  /**
   * Schedule constructor.
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
  public function create() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function update() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function delete() {
    throw new Exception('Not implemented');
  }

}
