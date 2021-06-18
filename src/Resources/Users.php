<?php

namespace CapsuleB\EverHour\Resources;

use CapsuleB\EverHour\Client;

/**
 * Class Users
 * @package CapsuleB\EverHour\Resources
 *
 * @property Client $client
 */
class Users {
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
  public function getCurrent() {
    return $this->client->get('/users/me');
  }

  /**
   * @return array|mixed|object
   */
  public function getAll() {
    return $this->client->get('/team/users');
  }
}
