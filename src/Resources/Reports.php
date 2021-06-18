<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Reports
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Reports {

  const BASE_URL = 'clients';

  /**
   * Reports constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function getByProject() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getByClients() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getByUsers() {
    throw new Exception('Not implemented');
  }

}
