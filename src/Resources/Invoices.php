<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Invoices
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Invoices {

  const BASE_URL = 'clients';

  /**
   * Invoices constructor.
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
  public function refreshLineItems() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function markAs() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function exportTo() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function delete() {
    throw new Exception('Not implemented');
  }

}
