<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;

/**
 * Class Clients
 * @package EverHour\Resources
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

  public function list() {}

}
