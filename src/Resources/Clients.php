<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Clients
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Clients {

  const BASE_URL = 'clients';

  /**
   * Clients constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function get() {
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
  public function updateBudget() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteBudget() {
    throw new Exception('Not implemented');
  }

}
