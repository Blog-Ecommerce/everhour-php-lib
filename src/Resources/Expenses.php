<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;
use Exception;

/**
 * Class Expenses
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Expenses {

  const BASE_URL = 'clients';

  /**
   * Expenses constructor.
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

  /**
   * @throws Exception
   */
  public function getAllCategories() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function createCategory() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function updateCategory() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteCategory() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function createAttachment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function addAttachment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function downloadAttachment() {
    throw new Exception('Not implemented');
  }

  /**
   * @throws Exception
   */
  public function deleteAttachment() {
    throw new Exception('Not implemented');
  }

}
