<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Timecards
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Timecards {

  const BASE_URL = 'clients';

  /**
   * Timecards constructor.
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
  public function getByUser() {
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
  public function clockIn() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function clockOut() {
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
