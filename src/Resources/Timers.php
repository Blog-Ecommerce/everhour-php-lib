<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Timers
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Timers {

  const BASE_URL = 'clients';

  /**
   * Timers constructor.
   * @param Client $client
   */
  public function __construct(Client $client) {
    $this->client = $client;
  }

  /**
   * @throws Exception
   */
  public function start() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function getRunning() {
    throw new Exception('Not implemented');
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
  public function stop() {
    throw new Exception('Not implemented');
  }

}
